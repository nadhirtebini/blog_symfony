<?php



namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use App\Entity\User;
use App\Form\ArticleType;
use ArticleType as GlobalArticleType;
use Doctrine\ORM\EntityManagerInterface;
use DateTime;
use Symfony\Component\Security\Core\Security;

class ArticleController extends AbstractController
{
    
    private $security;

    
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager, Security $security)
    {
        $this->entityManager = $entityManager;
        $this->security = $security;
    }
    #[Route('/user/{id}/article/new', name: 'app_article_new', methods: ['GET', 'POST'])]
    public function addArticle(Request $request, int $id): Response
    {
        // Récupérer l'utilisateur correspondant à l'ID
        $user = $this->entityManager->getRepository(User::class)->find($id);
    
        // Vérifier si l'utilisateur existe
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }
    
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
    
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $article->setCreatedAt(new DateTime());
            $article->setAuthor($user);
    
            $this->entityManager->persist($article);
            $this->entityManager->flush();
    
            return $this->redirectToRoute('app_articles_by_user', ['id' => $id]);
        }
    
        return $this->render('add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    


    #[Route('/articles/user/{id}', name: 'app_articles_by_user', methods: ['GET'])]
    public function showArticlesByUser(int $id): Response
    {
        $user = $this->entityManager->getRepository(User::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        $articles = $this->entityManager->getRepository(Article::class)->findBy(['author' => $user]);

        $deleteForms = [];
        foreach ($articles as $article) {
            $deleteForms[$article->getId()] = $this->createDeleteForm($article)->createView();
        }

        return $this->render('user_articles.html.twig', [
            'articles' => $articles,
            'user' => $user,
            'delete_forms' => $deleteForms,
        ]);
    }

    private function createDeleteForm(Article $article)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('app_article_delete', ['id' => $article->getId()]))
            ->setMethod('POST')
            ->getForm();
    }

    #[Route('/article/edit/{id}', name: 'app_article_edit', methods: ['GET', 'POST'])]
public function editArticle(Request $request, int $id): Response
{
    $article = $this->entityManager->getRepository(Article::class)->find($id);

    if (!$article) {
        throw $this->createNotFoundException('Article not found');
    }

    $form = $this->createForm(ArticleType::class, $article);

    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $this->entityManager->flush();

        return $this->redirectToRoute('app_articles_by_user', ['id' => $article->getAuthor()->getId()]);
    }

    return $this->render('edit.html.twig', [
        'form' => $form->createView(),
        'article' => $article,
    ]);
}

    #[Route('/article/delete/{id}', name: 'app_article_delete', methods: ['POST'])]
public function deleteArticle(Request $request, int $id): Response
{
    $article = $this->entityManager->getRepository(Article::class)->find($id);
    
    if (!$article) {
        throw $this->createNotFoundException('No article found for id '.$id);
    }
    
    $authorId = $article->getAuthor()->getId(); // Déclaration de $authorId ici

   
    $this->entityManager->remove($article);
    $this->entityManager->flush();
    
    return $this->redirectToRoute('app_articles_by_user', ['id' => $authorId]);
}

#[Route('/articles', name: 'app_all_articles')]
public function showAllArticles(): Response
{
    $articles = $this->entityManager->getRepository(Article::class)->findAll();

    return $this->render('all_articles.html.twig', [
        'articles' => $articles,
    ]);
}


    

    
}
