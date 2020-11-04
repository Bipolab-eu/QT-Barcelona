<?php

namespace App\Controller\Admin;

use App\Entity\CoverText;
use App\Entity\DescriptionText;
use App\Entity\GameText;
use App\Form\DescriptionType;
use App\Form\PostType;
use App\Repository\GameTextRepository;
use App\Repository\CoverTextRepository;
use App\Repository\DescriptionTextRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin",name="admin")
 * @IsGranted("ROLE_ADMIN")
 */
class AdminController extends AbstractController
{
  /**
     * @Route("/", name="index")
     * @param      CoverTextRepository $coverTextRepository
     * @param      DescriptionTextRepository $descriptionTextRepository
     * @param      GameTextRepository $gameTextRepository
     * @return     Response
     */   
    public function getData(CoverTextRepository $coverTextRepository, DescriptionTextRepository $descriptionTextRepository, GameTextRepository $gameTextRepository): Response
    {
        $coverText = $coverTextRepository->findAll();
        $descriptionText = $descriptionTextRepository->findAll();
        $gameText = $gameTextRepository->findAll();
        return $this->render('admin/content/index.html.twig', [
            'cover_text' => $coverText,
            'description_text' => $descriptionText,
            'game_text' => $gameText,
            'title' => 'Text de capçalera',
            'title2' => 'Text informatiu',
            'title3' => 'Instruccions de el joc'
            ]
        );
    }

    // public function getGameText(): Response
    // {
    //     return $this->render('game_text/index.html.twig', [
    //         'controller_name' => 'GameTextController',
    //         ]
    //     );
    // }

    /**
     * @Route("/create/cover-text", name="create")
     * @param Request $request
     * @return Response
     */
    public function createCoverText(Request $request)
    {
        $coverText = new CoverText();

        $form = $this->createForm(PostType::class, $coverText);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();

            $em->persist($coverText);
            $em->flush();

            return $this->redirect('/admin');
        }

        return $this->render(
            'cover_text/create.html.twig', [
            'form' => $form->createView()
            ]
        );
    }

    /**
     * @Route("/create/description-text", name="create")
     * @param Request $request
     * @return Response
     */
    public function createDescriptionText(Request $request)
    {
        $descriptionText = new DescriptionText();

        $form = $this->createForm(DescriptionType::class, $descriptionText);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();

            $em->persist($descriptionText);
            $em->flush();

            return $this->redirect('/admin');
        }
        
        return $this->render(
            'description_text/create.html.twig', [
            'form' => $form->createView()
            ]
        );
    }

    /**
     * @Route("/create/game-text", name="create")
     * @param Request $request
     * @return Response
     */
    public function createGameText(Request $request)
    {
        $gameText = new GameText();

        $form = $this->createForm(DescriptionType::class, $gameText);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();

            $em->persist($gameText);
            $em->flush();

            return $this->redirect('/admin');
        }
        
        return $this->render(
            'description_text/create.html.twig', [
            'form' => $form->createView()
            ]
        );
    }

    // /**
    //  * @Route("/show/{id}", name="show")
    //  * @param               Text $text
    //  * @return              Response
    //  */
    // public function show(Text $text)
    // {
    //     // create the show view
    //     return $this->render(
    //         'post/show.html.twig', [
    //         'post' => $post
    //         ]
    //     );
    // }

    /**
     * Displays a form to edit an existing Post entity.
     *
     * @Route("/edit/cover-text/{id<\d+>}", methods="GET|POST", name="admin_cover_text_edit")
     * @IsGranted("ROLE_ADMIN")
     */
    public function edit(Request $request, CoverText $coverText): Response
    {
        $form = $this->createForm(PostType::class, $coverText);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'post.updated_successfully');

            return $this->redirect('/admin');
        }

        return $this->render('admin/content/edit.html.twig', [
            'cover_text' => $coverText,
            'form' => $form->createView(),
            'title' => 'Text de capçalera'
            ]
        );
    }

    // /**
    //  * @Route("/delete/{id}", name="delete")
    //  */
    // public function remove(Post $post)
    // {
    //     $em = $this->getDoctrine()->getManager();
        
    //     $em->remove($post);
    //     $em->flush();
    //     $this->addFlash('success', 'Post was removed');
        
    //     return $this->redirect($this->generateUrl('post.index'));
    // }
}