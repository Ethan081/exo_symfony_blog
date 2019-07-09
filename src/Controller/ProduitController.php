<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    //Je cree un attribues de class $produits
    private $products = [
        [
        'title' => 'Trotinette 1',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
        'image' => 'https://images.oxybul.com/Photo/IMG_FICHE_PRODUIT/Image/500x500/3/324168.jpg',
        'id' => 1
        ],
        [
        'title' => 'Trotinette 2',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
        'image' => 'https://images.oxybul.com/Photo/IMG_FICHE_PRODUIT/Image/500x500/3/324168.jpg',
        'id' => 2
        ],
        [
        'title' => 'Trotinette 3',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
        'image' => 'https://images.oxybul.com/Photo/IMG_FICHE_PRODUIT/Image/500x500/3/324168.jpg',
        'id' => 3
        ],
        [
        'title' => 'Trotinette 4',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
        'image' => 'https://images.oxybul.com/Photo/IMG_FICHE_PRODUIT/Image/500x500/3/324168.jpg',
        'id' => 4
        ],
        [
        'title' => 'Trotinette 5',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
        'image' => 'https://images.oxybul.com/Photo/IMG_FICHE_PRODUIT/Image/500x500/3/324168.jpg',
        'id' => 5
        ],
        [
        'title' => 'Trotinette 6',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
        'image' => 'https://images.oxybul.com/Photo/IMG_FICHE_PRODUIT/Image/500x500/3/324168.jpg',
        'id' => 6
        ],
        [
        'title' => 'Trotinette 7',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
        'image' => 'https://images.oxybul.com/Photo/IMG_FICHE_PRODUIT/Image/500x500/3/324168.jpg',
        'id' => 7
        ],
        [
        'title' => 'Trotinette 8',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
        'image' => 'https://images.oxybul.com/Photo/IMG_FICHE_PRODUIT/Image/500x500/3/324168.jpg',
        'id' => 8
        ]

    ];
    //Je cree une route produits
    /**
     * @Route("/produits", name="produits")
     */
    public function produits()
    {
        return $this->render('produits_page.html.twig',
            [
                'produits'=>$this->products
            ]
        );
    }

    //Je cree une route produit
    /**
     * @Route("/produit/{id}", name="produit_page")
     */
    public function produit($id)
    {
        return $this->render('produit_page.html.twig',
            [
                'produit'=>$this->products[$id-1]
            ]
        );
    }

}