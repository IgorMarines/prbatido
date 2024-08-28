<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Exercises;

class ExercisesTableSeeder extends Seeder
{
    public function run(): void
    {
        $exercises = [
            ['name' => 'Flexão', 'description' => 'Exercício básico de peso corporal para fortalecer a parte superior do corpo.', 'category' => 'Força'],
            ['name' => 'Agachamento', 'description' => 'Exercício para a parte inferior do corpo que trabalha coxas e glúteos.', 'category' => 'Força'],
            ['name' => 'Avanço', 'description' => 'Exercício que trabalha as pernas e o core.', 'category' => 'Força'],
            ['name' => 'Burpee', 'description' => 'Exercício de corpo inteiro que envolve agachamento, salto e flexão.', 'category' => 'Cardio'],
            ['name' => 'Jumping Jack', 'description' => 'Exercício cardiovascular que envolve saltar com os braços e pernas afastados.', 'category' => 'Cardio'],
            ['name' => 'Prancha', 'description' => 'Exercício para fortalecer o core que envolve manter uma posição semelhante à de flexão.', 'category' => 'Core'],
            ['name' => 'Escalador', 'description' => 'Exercício cardiovascular que simula a escalada de uma montanha.', 'category' => 'Cardio'],
            ['name' => 'Abdominal', 'description' => 'Exercício abdominal que envolve levantar a parte superior do corpo a partir de uma posição deitada.', 'category' => 'Core'],
            ['name' => 'Elevação de Pernas', 'description' => 'Exercício que foca nos músculos abdominais inferiores, levantando as pernas enquanto está deitado.', 'category' => 'Core'],
            ['name' => 'Supino', 'description' => 'Exercício de força que envolve levantar um peso para cima enquanto está deitado em um banco.', 'category' => 'Força'],
            ['name' => 'Levantamento Terra', 'description' => 'Exercício de força que envolve levantar um peso do chão até a altura dos quadris.', 'category' => 'Força'],
            ['name' => 'Barra Fixa', 'description' => 'Exercício de força para a parte superior do corpo que envolve levantar o corpo usando uma barra.', 'category' => 'Força'],
            ['name' => 'Mergulho', 'description' => 'Exercício que envolve abaixar e levantar o corpo usando os braços.', 'category' => 'Força'],
            ['name' => 'Swing com Kettlebell', 'description' => 'Exercício de corpo inteiro que envolve balançar um kettlebell entre as pernas.', 'category' => 'Força'],
            ['name' => 'Twist Russo', 'description' => 'Exercício abdominal que envolve girar o tronco enquanto está sentado.', 'category' => 'Core'],
            ['name' => 'Joelhos Altos', 'description' => 'Exercício cardiovascular que envolve correr no lugar levantando os joelhos altos.', 'category' => 'Cardio'],
            ['name' => 'Crunch de Bicicleta', 'description' => 'Exercício abdominal que simula um movimento de pedalar enquanto está deitado de costas.', 'category' => 'Core'],
            ['name' => 'Mergulho de Tríceps', 'description' => 'Exercício que foca nos tríceps abaixando e levantando o corpo usando os braços.', 'category' => 'Força'],
            ['name' => 'Abertura de Peito', 'description' => 'Exercício de força que envolve abrir os braços para os lados enquanto está deitado em um banco.', 'category' => 'Força'],
            ['name' => 'Remada', 'description' => 'Exercício de força que envolve puxar um peso em direção ao corpo enquanto está inclinado.', 'category' => 'Força'],
            ['name' => 'Pulo no Caixa', 'description' => 'Exercício pliométrico que envolve pular em uma caixa ou plataforma.', 'category' => 'Cardio'],
        ];

        foreach ($exercises as $exercise) {
            Exercises::create($exercise);
        }
    }
}
