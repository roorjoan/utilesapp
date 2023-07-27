<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Util;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UtilTest extends TestCase
{
    use RefreshDatabase;

    public function testCanSeeUtilsList()
    {
        $this->withoutExceptionHandling();

        //Given
        Util::factory()->create();

        //When
        $response = $this->get(route('utils.index'));

        //Then
        $response->assertStatus(200);

        $response->assertViewIs('utils.index');

        $response->assertViewHas('utils', Util::all());
    }

    public function testCanSeeCreatePage()
    {
        $this->withoutExceptionHandling();

        //Given

        //When
        $response = $this->get(route('utils.create'));

        //Then
        $response->assertStatus(200);
        $response->assertViewIs('utils.create');
        $response->assertSee('Nombre');
        $response->assertSee('Descripción');
        $response->assertSee('URL');
        $response->assertSee('Archivo');
    }

    public function testCanStoreUtil()
    {
        $this->withoutExceptionHandling();

        //creando el util que se va a guardar
        $util = [
            'name' => 'Laravel docs',
            'description' => 'Laravel docs for Laravel developers',
            'url' => 'http://laravel.com',
            'file' => 'storage/no-image.svg',
        ];

        //lo mando a guardar
        $response = $this->post(route('utils.store'), $util);

        //verifico que redirecciona al index
        $response->assertStatus(302);
        $response->assertRedirect(route('utils.index'));

        //verifico que existe el registro que guarde en la db
        $this->assertDatabaseCount('utils', 1);
        $this->assertDatabaseHas('utils', $util);

        //verifico que los datos que se guardaron sean los correctos
        $lastUtilCreated = Util::latest()->first();
        $this->assertEquals($util['name'], $lastUtilCreated->name);
        $this->assertEquals($util['description'], $lastUtilCreated->description);
        $this->assertEquals($util['url'], $lastUtilCreated->url);
        $this->assertEquals($util['file'], $lastUtilCreated->file);
    }

    public function testCanSeeShowUtilPage()
    {
        $this->withoutExceptionHandling();

        //Given
        $util = Util::factory()->create();

        //When
        $response = $this->get("/utils/{$util->id}");

        //Then
        $response->assertStatus(200);
        $response->assertViewIs('utils.show');

        $response->assertViewHas('util', $util);

        $response->assertSee('Nombre');
        $response->assertSee('Descripción');
        $response->assertSee('URL');
        $response->assertSee('Archivo');
    }

    public function testCanDeleteUtil()
    {
        $this->withoutExceptionHandling();

        //Given
        $util = Util::factory()->create();

        //When
        $response = $this->delete("/utils/{$util->id}");

        //Then
        $response->assertStatus(302);
        $response->assertRedirect(route('utils.index'));

        $this->assertDatabaseCount('utils', 0);
        $this->assertDatabaseMissing('utils', $util->toArray());
    }

    /*public function testCanUploadUtilFile()
    {
        //TODO
    }*/
}
