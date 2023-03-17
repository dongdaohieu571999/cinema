<!-- <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie', function (Blueprint $table) {
            $table->increments('m_id');
            $table->string('name');
            $table->string('description');
            $table->string('director');
            $table->string('actor');
            $table->string('genre');
            $table->string('premiere');
            $table->text('duration');
            $table->string('language');
            $table->string('movie_banner') -> nullable();
            $table->boolean('now_playing');
            $table->boolean('coming_soon');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie');
    }
};
