<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
    //je cree une propriete de class article
    private $articles = [
    1 => [
    'title' => 'Article 1',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
    'image' => 'https://gal.img.pmdstatic.net/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2Fprismamedia_people.2F2017.2F07.2F03.2Fcd76a89a-9f7f-44fc-a066-06bbb34281af.2Ejpeg/2216x1536/quality/80/charles-pasqua.jpeg'
    ],
    2 => [
    'title' => 'Article 2',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
    'image' => 'http://s1.lprs1.fr/images/2018/05/15/7716630_a7834498-5761-11e8-aba9-269965d92401-1_940x500.jpg'
    ],
    3 => [
    'title' => 'Article 3',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
    'image' => 'https://tel.img.pmdstatic.net/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2FTEL.2Enews.2F2018.2F01.2F12.2F28453de3-9265-4ba8-9b3d-1dae3e693d03.2Ejpeg/1150x495/crop-from/top/une-nouvelle-emission-pour-jamy-gourmaud.jpg'
    ],
    4 => [
    'title' => 'Article 4',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
    'image' => 'https://static.cnews.fr/sites/default/files/styles/image_640_360/public/jean-lassalle_0.jpg?itok=kzxd2dc3'
    ],
    5 => [
    'title' => 'Article 5',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
    'image' => 'https://www.lamanchelibre.fr/photos/maxi/649833.jpg'
    ],
    6 => [
    'title' => 'Article 6',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
    'image' => 'https://img.cdandlp.com/2016/10/imgL/118348804.jpg'
    ],

    ];
    //Route de ma page homePage
    /**
     * @Route("/homepage", name="home_page")
     */
    public function homePage()
    {
        //je cree une variable a qui j assigne
        $listArticles = array_slice($this->articles, -3);
        //je recupere le contenue de la page  homePage pour retourner  la @Route /homePage.
        return $this->render("homePage.html.twig",
            [

                //j'appel mon attribut de class
                'articles'=>$listArticles
            ]
        );
    }


    //Route de ma page lesArticles
    /**
     * @Route("/lesarticles", name="les_article_page")
     */
    public function lesarticles()
    {
        return $this->render("lesArticles.html.twig",
            [
                //j'appel mon attribut de class
                'articles'=>$this->articles
            ]
        );

    }


    //Route de mon Article simple.
    //je cree une wildcard {id}, je qui me permet a afficher dans l url l index de mon article dans le tableau articles.
    /**
     * @Route("/article/{id}", name="article_page")
     */
    //je met en paramettre ma variable $id.
    public function article($id)
    {
        return $this->render("article.html.twig",
            [
                //j'appel mon propriete de class
                //j ajoute [$id] a mon atribue $this->articles[$id].
                'article'=>$this->articles[$id]
            ]
        );

    }
//    -----------------------------------------------------------------------------------------------------------
    //exo extend
    /**
 * @Route("/testExtend", name="testExtend_page")
 */
    //je met en paramettre ma variable $id.
    public function test()
    {
        return $this->render("testExtend.html.twig",
            [

            ]
        );

    }
    /**
     * @Route("/testExtend02", name="testExtend02_page")
     */
    //je met en paramettre ma variable $id.
    public function test02()
    {
        return $this->render("testExtend02.html.twig",
            [

            ]
        );

    }


}
