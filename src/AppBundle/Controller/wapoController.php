<?php 

	namespace AppBundle\Controller;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
	use Symfony\Component\HttpFoundation\Response;

	/**
	* 
	*/
	class wapoController extends Controller
	{
		/**
		 * @Route("/")
		 * @Route("/index")
		 */
		public function indexAction()
		{
			/*$templating = $this->container->get('templating');
			$html = $templating->render('wapo/index.html.twig');
			return new Response($html);*/

			return $this->render('wapo/index.html.twig');
		}

		/**
		 * @Route("/about")
		 */

		public function aboutAction()
		{
			return $this->render('wapo/about.html.twig');
		}

		/**
		 * @Route("/contact")
		 */

		public function contactAction()
		{
			return $this->render('wapo/contact.html.twig');
		}

		/**
		 * @Route("/freestations")
		 */

		public function freestationsAction()
		{
			return $this->render('wapo/freestations.html.twig');
		}



	}


 ?>