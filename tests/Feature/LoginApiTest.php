<?php

namespace Tests\Feature;

use App\Repositories\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginApiTest extends TestCase
{
	use RefreshDatabase;

	private $user = null;

	public function setUp(): void
	{
		parent::setUp();

		// テストユーザー作成
		$this->user = factory(User::class)->create();
	}

	/**
     * @test
     */
    public function should_登録済みのユーザーを認証して返却する()
    {
        $response = $this->json('POST', route('login'), [
        	'email' => $this->user->email,
			'password' => 'password'
		]);

        $response->assertStatus(200)->assertJson(['name' => $this->user->name]);

        $this->assertAuthenticatedAs($this->user);
    }
}