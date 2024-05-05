<?php /** @noinspection PhpUnused */

namespace Database\Factories;

use App\models\video;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
   protected $model = video::class;

    public function definition()
    {
       return [
           'name' => $this->faker->name(),
           'length' => '150',
           'slug' => $this->faker->slug(),
           'url' => 'https://file-examples-com.github.io/uploads/2017/04/file_example_MP4_1920_18MG.mp4',
           'description'=>$this->faker->realText(),
           'thumbnail' => 'https://loremflickr.com/446/240/world?random=' . rand(1, 99)
        ];
    }
}
