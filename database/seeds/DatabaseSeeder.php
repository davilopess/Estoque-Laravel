<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('ProdutoTableSeeder');
    }
}


class ProdutoTableSeeder extends Seeder {
    public function run()

    {
        DB::insert('insert into produtos
        (nome, quantidade, valor, descricao)
        values (?,?,?,?)',
        array('Geladeira', 2, 5900.00,
        'Side by Side com gelo na porta'));
        DB::insert('insert into produtos
        (nome, quantidade, valor, descricao)
        values (?,?,?,?)',
        array('Fogão', 5, 950.00,
        'Painel automático e forno elétrico'));
        DB::insert('insert into produtos
        (nome, quantidade, valor, descricao)
        values (?,?,?,?)',
        array('Microondas', 1, 1520.00,
        'Manda SMS quando termina de esquentar'));
        DB::insert('insert into produtos
        (nome, quantidade, valor, descricao)
        values (?,?,?,?)',
        array('Mouse', 11, 120.00,
        'Mouse razer 1600dpi'));
        DB::insert('insert into produtos
        (nome, quantidade, valor, descricao)
        values (?,?,?,?)',
        array('Teclado', 23, 20.00,
        'Multilaser '));
        DB::insert('insert into produtos
        (nome, quantidade, valor, descricao)
        values (?,?,?,?)',
        array('Notebook', 1, 2520.00,
        'Asus 1tb gtx 1050'));
        DB::insert('insert into produtos
        (nome, quantidade, valor, descricao)
        values (?,?,?,?)',
        array('Headset', 1, 1520.00,
        'Hyperx 7.1'));

    }
}
        