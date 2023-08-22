<?php

namespace App\Entity;

class UserController
{
// src/Controller/UserController.php
namespace App\Controller;

    use App\Entity\User;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user/{id}", name="user_show")
     */
    public function show(User $user)
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

}

// src/Controller/BookController.php
namespace App\Controller;

use App\Entity\Book;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    /**
     * @Route("/books", name="book_list")
}