<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class CategoryController extends AbstractController
{
    public $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function createCategory(Request $request)
    {
        $category = new Category;
        
        $form = $this->createForm(CategoryType::class, $category);
        
        $form->handleRequest($request);

        if($form->isSubmitted())
        {
         $category_submit =  $form->getData()->getName();
            
            $category->setName($category_submit);

            $this->categoryRepository->save($category, $flush = true);

            $this->addFlash('success','La catégorie a bien été ajouté !');

            return $this->redirectToRoute('show_category');
        }


        return $this->render('category/create.html.twig', [
            'form' => $form->createView()
        ]);
    }


    public function showCategory()
    {
        $categories = $this->categoryRepository->findAll();

        return $this->render('category/show.html.twig', ['categories' => $categories]);
    }

    public function updateCategory(Request $request,$id)
    {
        $category = $this->categoryRepository->find($id);

        if(!$category){
            return $this->redirectToRoute('show_category');
        }

        $form = $this->createForm(CategoryType::class,$category);

        $form->handleRequest($request);

        if($form->isSubmitted()){

            $this->categoryRepository->save($category, $flush = true);
            $this->addFlash('success','La catégorie a bien été ajouté');

            return $this->redirectToRoute('show_category');

        }

        return $this->render('category/update.html.twig',[
            'form' => $form->createView()
        ]);
    }

    public function deleteCategory($id)
    {
        $category = $this->categoryRepository->find($id);

        if($category)
        {
            $this->categoryRepository->remove($category, $flush = true);
            $this->addFlash('success', 'la catégorie a bien été supprimée');
            return $this->redirectToRoute('show_category');   
           }
        return $this->redirectToRoute('show_category');  
    }

    public function showcategoryfront($id, ProductRepository $productRepository)
    {
        $products = $productRepository->findBy(['idcategory' => $id]);


       return  $this->render('category/showfront.html.twig', [
            'products' => $products
        ]);
    }

    public function showFormations(ProductRepository $productRepository)
    {
        $products = $productRepository->findBy(['idcategory' => 2]);


        return  $this->render('category/frontformations.html.twig', [
             'products' => $products
         ]);
    }

    public function showStages(ProductRepository $productRepository)
    {
        $products = $productRepository->findBy(['idcategory' => 3]);


        return  $this->render('category/frontstages.html.twig', [
             'products' => $products
         ]);
    }

    public function showRdv(ProductRepository $productRepository)
    {
        $products = $productRepository->findBy(['idcategory' => 4]);


        return  $this->render('category/frontrdv.html.twig', [
             'products' => $products
         ]);
    }

    public function showEbook(ProductRepository $productRepository)
    {
        $products = $productRepository->findBy(['idcategory' => 5]);


        return  $this->render('category/frontebook.html.twig', [
             'products' => $products
         ]);
    }

}
