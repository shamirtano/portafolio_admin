<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Skill;
use Carbon\Carbon;

class PortfolioController extends Controller {
    /**
    * Muestra la página principal del portafolio
    *
    * @return \Illuminate\View\View
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $profile = Profile::first();
        $experiences = Experience::latest()->take( 5 )->get();
        // Las 5 experiencias más recientes
        $educations = Education::all();
        $skills = Skill::all();
        $projects = Project::all();

        if ( $profile ) {
            $profile->birthday_date = Carbon::parse( $profile->birthday )->locale( 'es' )->isoFormat( 'MMMM D' );
            $profile->age = Carbon::parse( $profile->birthday )->age;
        } else {
            $profile = null;
        }

        if ( $experiences->count() > 0 ) {
            $this->formatDateExperience( $experiences );
        }

        return view( 'portfolio.index', compact( 'profile', 'experiences', 'educations', 'skills', 'projects' ) );
    }

    public function about() {
        $profile = Profile::first();

        // Formatear la fecha de cumpleaños solo mostrar dia y mes ej: Marzo 24
        $profile->birthday_date = Carbon::parse( $profile->birthday )->locale( 'es' )->isoFormat( 'MMMM D' );
        $profile->age = Carbon::parse( $profile->birthday )->age;

        // return response()->json( $profile );

        return view( 'portfolio.about', compact( 'profile' ) );
    }

    public function experience() {
        $experiences = Experience::latest()->get();

        if ( $experiences->count() > 0 ) {
            $this->formatDateExperience( $experiences );
        }

        return view( 'portfolio.experience', compact( 'experiences' ) );
    }

    public function education() {
        $educations = Education::all();

        return view( 'portfolio.education', compact( 'educations' ) );
    }

    public function skills() {
        $skills = Skill::all();

        return view( 'portfolio.skills', compact( 'skills' ) );
    }

    public function projects() {
        $projects = Project::all();

        return view( 'portfolio.projects', compact( 'projects' ) );
    }

    /*****************************************/
    /************* METODOS PRIVADOS **********/
    /*****************************************/

    /** Formatea la fecha de inicio y fin de la experiencia con Carbon y localización, capitalizando el mes
    * @param  $experiences  array - Experiencias laborales
    * @return void
    */

    private function formatDateExperience( $experiences ) {
        $this->changeTypeCompany( $experiences );
        foreach ( $experiences as $experience ) {
            $experience->start_date = Carbon::parse( $experience->start_date )->locale( 'es' )->isoFormat( 'MMMM YYYY' );
            $experience->end_date = $experience->end_date ? Carbon::parse( $experience->end_date )->locale( 'es' )->isoFormat( 'MMMM YYYY' ) : 'Actualidad';
        }
    }

    // cambiar el tipo de empresa

    private function changeTypeCompany( $experiences ) {
        $type_company = [
            '1' => 'Pública',
            '2' => 'Privada',
            '3' => 'Mixta',
            '4' => 'Independiente',
        ];

        foreach ( $experiences as $experience ) {
            $experience->type = $type_company[ $experience->type ];
        }
    }
}