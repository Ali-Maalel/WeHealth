<?php

namespace App\Test\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private PostRepository $repository;
    private string $path = '/post/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Post::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Post index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $originalNumObjectsInRepository = count($this->repository->findAll());

        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'post[created_at]' => 'Testing',
            'post[last_at]' => 'Testing',
            'post[content]' => 'Testing',
            'post[auteur]' => 'Testing',
            'post[liste_commentaire]' => 'Testing',
        ]);

        self::assertResponseRedirects('/post/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Post();
        $fixture->setCreated_at('My Title');
        $fixture->setLast_at('My Title');
        $fixture->setContent('My Title');
        $fixture->setAuteur('My Title');
        $fixture->setListe_commentaire('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Post');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Post();
        $fixture->setCreated_at('My Title');
        $fixture->setLast_at('My Title');
        $fixture->setContent('My Title');
        $fixture->setAuteur('My Title');
        $fixture->setListe_commentaire('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'post[created_at]' => 'Something New',
            'post[last_at]' => 'Something New',
            'post[content]' => 'Something New',
            'post[auteur]' => 'Something New',
            'post[liste_commentaire]' => 'Something New',
        ]);

        self::assertResponseRedirects('/post/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getCreated_at());
        self::assertSame('Something New', $fixture[0]->getLast_at());
        self::assertSame('Something New', $fixture[0]->getContent());
        self::assertSame('Something New', $fixture[0]->getAuteur());
        self::assertSame('Something New', $fixture[0]->getListe_commentaire());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Post();
        $fixture->setCreated_at('My Title');
        $fixture->setLast_at('My Title');
        $fixture->setContent('My Title');
        $fixture->setAuteur('My Title');
        $fixture->setListe_commentaire('My Title');

        $this->repository->add($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/post/');
    }
}
