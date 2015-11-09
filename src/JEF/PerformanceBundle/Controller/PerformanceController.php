<?php

// src/JEF/PerformanceBundle/Controller/PerformanceController.php

namespace JEF\PerformanceBundle\Controller;

// Contrôleur de base de Symfony, pour pouvoir appeler les templates (=views)
// par exemple, pour appeler la vue "Performance:index.html.twig"
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request; // Pour récupérer la requête php "?" depuis le contrôleur
// Ce use permet d'afficher une réponse simple (ex.: "return Response("hello")")
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse; // "use" pour une réponse de redirection

class PerformanceController extends Controller
{
    public function indexAction($page)
    {
        // Si la page est inférieure à 1, exception (page 404 affichée)
        if ($page < 1){
            throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
        }

        // Récupérer la liste des documents, et la passer au template
        // appeler donc le template correspondant.
        return $this->render('JEFPerformanceBundle:Performance:index.html.twig');

        // Ancien code
    	// "$this->get('templating')" permet de récupérer le contenu d'un template
    	// grâce à sa méthode "render"

    	//$content = $this->get('templating')->render('JEFPerformanceBundle:Performance:index.html.twig', array('nom' => 'Raphaël'));
    	// Générer l'url. Obtenir du document portant l'id 5. Nom de la route puis valeur du paramètre.
        // $url = $this->get('router')->generate('jef_performance_view', array('id' => 5));
        // Passer la variable $content et $url à la fonction "Response" pour qu'elle l'affiche
        //return new Response("L'URL du document à l'id 5 est : ".$url);
        //return new Response($content);
    }

    public function viewAction($id)
    {
        // Récupérer le document correspondant à l'id $id
        return $this->render('JEFPerformanceBundle:Performance:view.html.twig', array('id' => $id));



        // Ancien code
        // Récupérer la session
        //$session = $request->getSession();
        // Récupérer le contenu de la variable user_id
        //$userId = $session->get('user_id');
        // Définir nouvelle valeur de la variable
        //$session->set('user_id', 91);
        // Renvoyer la réponse
        // return new Response("<body>Page de test. User id = ".$userId."</body>");
        // créer l'objet Response et lui donner comme contenu le contenu du template
        //return $this->render('JEFPerformanceBundle:Performance:view.html.twig', array('id'=>$id));
    }

    public function addAction(Request $request)
    {
        $session = $request->getSession();

        // Messages flash dans la session, appelés "info"
        $session->getFlashBag()->add('info', 'Document enregistré avec succès.');
        $session->getFlashBag()->add('info', 'Confirmation : document enregistré.');

        return $this->redirect($this->generateUrl('jef_performance_view', array('id' => 5)));

    }

    public function returnHomeAction($id)
    {
        // créer l'objet Response et lui donner comme contenu le contenu du template
        $url = $this->get('router')->generate('jef_performance_home');
        return new RedirectResponse($url);
    }
}
