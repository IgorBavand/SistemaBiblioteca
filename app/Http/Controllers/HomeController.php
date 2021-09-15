<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Aluno;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->objAluno = new Aluno;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::check() === true){
            
            return view('home');
        }else{
            return redirect()->route('auth.login');
        }
    }

    public function cadastrar_aluno(){
        return view('cadastro.cadastro_aluno');
    }

    public function salvar_aluno(Request $req){

        //nome_aluno, turma, endereco, telefone, email

        $aluno = $req->nome_aluno;
        $turma = $req->turma;
        $endereco = $req->endereco;
        $telefone = $req->telefone;
        $email = $req->email;
        $qtd_emprestimos = 0;
        $qtd_emprestimos_pendentes = 0;


        $this->objAluno->create([
            'nome_aluno' => $aluno,
            'turma' => $turma,
            'endereco' => $endereco,
            'telefone' => $telefone,
            'email' => $email,
            'qtd_emprestimos' => $qtd_emprestimos,
            'qtd_emprestimos_pendentes' => $qtd_emprestimos_pendentes
        ]);
        return redirect('/');
    }
}
