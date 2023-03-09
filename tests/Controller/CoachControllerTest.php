<?php

namespace App\Test\Controller;

use App\Entity\Coach;
use App\Repository\CoachRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CoachControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private CoachRepository $repository;
    private string $path = '/coach/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Coach::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Coach index');

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
            'coach[login]' => 'Testing',
            'coach[password]' => 'Testing',
            'coach[nom]' => 'Testing',
            'coach[prenom]' => 'Testing',
            'coach[email]' => 'Testing',
            'coach[telephone]' => 'Testing',
            'coach[typeuser]' => 'Testing',
            'coach[CIN]' => 'Testing',
        ]);

        self::assertResponseRedirects('/coach/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Coach();
        $fixture->setLogin('My Title');
        $fixture->setPassword('My Title');
        $fixture->setNom('My Title');
        $fixture->setPrenom('My Title');
        $fixture->setEmail('My Title');
        $fixture->setTelephone('My Title');
        $fixture->setTypeuser('My Title');
        $fixture->setCIN('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Coach');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Coach();
        $fixture->setLogin('My Title');
        $fixture->setPassword('My Title');
        $fixture->setNom('My Title');
        $fixture->setPrenom('My Title');
        $fixture->setEmail('My Title');
        $fixture->setTelephone('My Title');
        $fixture->setTypeuser('My Title');
        $fixture->setCIN('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'coach[login]' => 'Something New',
            'coach[password]' => 'Something New',
            'coach[nom]' => 'Something New',
            'coach[prenom]' => 'Something New',
            'coach[email]' => 'Something New',
            'coach[telephone]' => 'Something New',
            'coach[typeuser]' => 'Something New',
            'coach[CIN]' => 'Something New',
        ]);

        self::assertResponseRedirects('/coach/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getLogin());
        self::assertSame('Something New', $fixture[0]->getPassword());
        self::assertSame('Something New', $fixture[0]->getNom());
        self::assertSame('Something New', $fixture[0]->getPrenom());
        self::assertSame('Something New', $fixture[0]->getEmail());
        self::assertSame('Something New', $fixture[0]->getTelephone());
        self::assertSame('Something New', $fixture[0]->getTypeuser());
        self::assertSame('Something New', $fixture[0]->getCIN());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Coach();
        $fixture->setLogin('My Title');
        $fixture->setPassword('My Title');
        $fixture->setNom('My Title');
        $fixture->setPrenom('My Title');
        $fixture->setEmail('My Title');
        $fixture->setTelephone('My Title');
        $fixture->setTypeuser('My Title');
        $fixture->setCIN('My Title');

        $this->repository->add($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/coach/');
    }
}
