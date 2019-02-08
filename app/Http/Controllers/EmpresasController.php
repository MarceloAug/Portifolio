<?php namespace App\Http\Controllers;
use Request;
use Validator;
use App\Cargo;
use App\Empresa;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\EmpresaRequest;



class EmpresasController extends Controller{

    public function ListaEmpresas(){
        $empresas = Empresa::all();
        return view('Empresas.EmpresasListar')->with('empresas', $empresas);
        
    }


    
    public function AdicionaEmpresas(EmpresaRequest $request){ 
        Empresa::create($request->all());
        return redirect('/empresas')->withInput();
    }



    public function FormularioAdicionar(){
        
        return view('Empresas.EmpresasAdicionar');
    }



    public function removeEmpresa($id){
        Empresa::where('ID', $id)->delete();
        return redirect()->action('EmpresasController@ListaEmpresas');

    }



    public function ExibeEmpresa($id){
        $empresa = Empresa::find($id);
        if(empty($empresa)) {
            return "Essa empresa não existe";
        }
        return view('Empresas.EmpresasExibir')->with('empresa', $empresa);
    }



    public function FormularioEditar($id){
        $empresa = Empresa::find($id);
        return view('Empresas.EmpresasEditar')->with('empresa', $empresa);
    }


    public function UpdateEmpresa(EmpresaRequest $request){
        Empresa::where('ID', $request->ID)->update(request()->except(['_token']));
        return redirect()->action('EmpresasController@ListaEmpresas');
    }



    public function FiltraListagem(){
        $filtro = Input::get('filtro');
        $campo = Input::get('campo');
        $empresas = Empresa :: where($filtro,$campo);
        return view('Empresas.EmpresasListar')->with('empresas', $empresas);
        
        
    }
    

} 
