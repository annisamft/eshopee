<?php

namespace Database\Factories;

use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiFactory extends Factory
{

    protected $model = Transaksi::class;


    public function definition()
    {
        return [
            'tanggal' => $this->faker->date(),
            'no_resi' => $this->faker->bothify()
        ];
    }
}
