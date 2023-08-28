<?php

namespace Tests\Feature;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response as FacadesResponse;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_auth(): void
    {
        $request = new Request;
        $response = new Response;
        //$user = User::factory()->create();

        $user = "admin@admin.com";
        $password = "$10$8c/KYwMvPpCFKREhs9FGC.PERtyjNA4VntMM5bsON2O8eiSLF.4gS";

        $select = User::where('email', $user)->first();
        dd($select);

        if ($user == $select->email && $password == $select->password) {
            Auth::login($select);
            $response->assertStatus(200);
        } else {
            $response->assertStatus(400);
        }
    }
}
