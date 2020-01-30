<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Postulante;
use App\User;
use App\Country;
use App\Job;
use App\Language;
use App\Rol;
use App\State;
use App\Company;
use App\Userdata;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\PDF;
use Barryvdh\DomPDF\Facade as PDF;
use GuzzleHttp\Client;


class PostulanteControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // utilizamos el Postulante, y el metodo all(consulta todos los entrenadores que esten registrados y los trae)
        $userdatas = Userdata::all();
        $country = Country::all();
        $state = State::all();
        // el parametro compact genera un array con los valores que le asignemos
        return view('postulantes.index', compact('userdatas', 'country','state') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( )
    {
        // cargamos con todos los datos de la base de datos language,country,state
        $language = Language::all();
        $country = Country::all();
        $state = State::all();

        //usamos api rest de countries y la cargamos en posts
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://restcountries.eu/rest/v2/all',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);

        $response = $client->request('GET' );
        $posts = json_decode( $response-> getBody()->getContents() );

        // le pasamos la variable $postulante a la vista show
        return view('postulantes.create', compact('language','country','state', 'posts'));
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //hasFile(hay alguna carpeta) revisamos si en desde nuestro formulario estamos recibiendo algun archivo
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            // usamos la fecha actual para que tenga un nombre unico,time()
            //getClientOriginalName() retorna el nombre original del archivo
            $nameavatar = time().$file->getClientOriginalName();
            //move,movemos a una carpeta dentro de nuestro proyecto. 
            //se crea una carpeta con el nombre images,dentro de la carpeta public
            $file->move(public_path().'/images/', $nameavatar);
        }

        $countries = new Country();
        $countries->name = $request->input('namecountry');
        $countries->save();

        $states = new State();
        $states->country_id = $countries->id;
        $states->name = $request->input('namestate');
        $states->save();

        $companies = new Company();
        $companies->name = $request->input('namecompany');
        $companies->save();

        $rols = new Rol();
        $rols->title = $request->input('rol');
        $rols->save();

        $userdata = new Userdata();
        $userdata->state_id = $states->id;
        $userdata->name = $request->input('name');
        $userdata->lastname = $request->input('lastname');
        $userdata->Intro = $request->input('Intro');
        $userdata->numero = $request->input('numero');
        $userdata->avatar = $nameavatar;
        $userdata->user_id = Auth::id();
        $userdata->save();
 
        $jobs = new Job();
        // Auth busca al ususario que inicia sesion
        $jobs->user_id= Auth::id();
        $jobs->company_id= $companies->id;
        $jobs->role_id= $rols->id;
        $jobs->from = $request->input('from');
        $jobs->to = $request->input('to');
        $jobs->salary = $request->input('salary');
        $jobs->save();

        $languages = new Language();
        $languages->name = $request->input('language');
        $languages->save();

        $userdatas = Userdata::all();
        return view('postulantes.index', compact('userdatas') );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $userdatas = Userdata::find($id);
        $pdf = PDF::loadView('postulantes.show',compact('userdatas'));
        return $pdf->stream('mi-pdf.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // recibe info de index.blade cuando le da click en Editar
    public function edit($id)
    {
        // return 'Hello i am edit'.$id;
        $userdatas = Userdata::find($id);
        $user = User::find($id);
        $countries = Country::find($id);
        $states = State::find($id);
        $rols = Rol::find($id);
        $languages = Language::find($id);
        $jobs = Job::find($id);
        $companies = Company::find($id);

// enviamos valores a el archivo edit.blade que se encuentra dentro de postulantes
        return view('postulantes.edit')
        ->with(compact('userdatas'))
        ->with(compact('user'))
        ->with(compact('countries'))
        ->with(compact('states'))
        ->with(compact('rols'))
        ->with(compact('companies'))
        ->with(compact('jobs'))
        ->with(compact('languages'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $userdata=Userdata::find($id);
        $userdata->fill($request->all());
        $userdata->save();

        $country=Country::find($id);
        $country->fill($request->all());
        $country->save();

        $state=State::find($id);
        $state->fill($request->all());
        $state->save();

        $rol=Rol::find($id);
        $rol->fill($request->all());
        $rol->save();

        $job=Job::find($id);
        $job->fill($request->all());
        $job->save();

        $language=Language::find($id);
        $language->fill($request->all());
        $language->save();

        $companies=Company::find($id);
        $companies->fill($request->all());
        $companies->save();

        $userdatas = Userdata::all();
   
        return view('postulantes.cambios');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $languages = Language::find($id);
        $languages->delete();
        $jobs = Job::find($id);
        $jobs->delete();
        $userdatas = Userdata::find($id);

       // ingresa a la carpeta public e elimina la imagen
        $file_path = public_path().'/images/'.$userdatas->avatar ;
        //nos imprime el $file_path
        // dd($file_path);
        \File::delete($file_path);

        $states = State::find($userdatas->state_id);
        $userdatas->delete();
        $states->delete();
        
        $countries = Country::find($id);
        $countries->delete();

        $rols = Rol::find($id);
        $companies = Company::find($id);
        $rols->delete();
        $companies->delete();

        // return 'Delete';
        return view('postulantes.cambios');
    }
}
