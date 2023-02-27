<?php

namespace App\Test\Controller;

use App\Entity\ProfessionnelSante;
use App\Repository\ProfessionnelSanteRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProfessionnelSanteControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private ProfessionnelSanteRepository $repository;
    private string $path = '/professionnel/sante/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(ProfessionnelSante::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('ProfessionnelSante index');

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
            'professionnel_sante[login]' => 'Testing',
            'professionnel_sante[password]' => 'Testing',
            'professionnel_sante[nom]' => 'Testing',
            'professionnel_sante[prenom]' => 'Testing',
            'professionnel_sante[email]' => 'Testing',
            'professionnel_sante[telephone]' => 'Testing',
            'professionnel_sante[typeuser]' => 'Testing',
            'professionnel_sante[matricule]' => 'Testing',
            'professionnel_sante[CIN]' => 'Testing',
        ]);

        self::assertResponseRedirects('/professionnel/sante/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new ProfessionnelSante();
        $fixture->setLogin('My Title');
        $fixture->setPassword('My Title');
        $fixture->setNom('My Title');
        $fixture->setPrenom('My Title');
        $fixture->setEmail('My Title');
        $fixture->setTelephone('My Title');
        $fixture->setTypeuser('My Title');
        $fixture->setMatricule('My Title');
        $fixture->setCIN('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('ProfessionnelSante');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new ProfessionnelSante();
        $fixture->setLogin('My Title');
        $fixture->setPassword('My Title');
        $fixture->setNom('My Title');
        $fixture->setPrenom('My Title');
        $fixture->setEmail('My Title');
        $fixture->setTelephone('My Title');
        $fixture->setTypeuser('My Title');
        $fixture->setMatricule('My Title');
        $fixture->setCIN('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'professionnel_sante[login]' => 'Something New',
            'professionnel_sante[password]' => 'Something New',
            'professionnel_sante[nom]' => 'Something New',
            'professionnel_sante[prenom]' => 'Something New',
            'professionnel_sante[email]' => 'Something New',
            'professionnel_sante[telephone]' => 'Something New',
            'professionnel_sante[typeuser]' => 'Something New',
            'professionnel_sante[matricule]' => 'Something New',
            'professionnel_sante[CIN]' => 'Something New',
        ]);

        self::assertResponseRedirects('/professionnel/sante/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getLogin());
        self::assertSame('Something New', $fixture[0]->getPassword());
        self::assertSame('Something New', $fixture[0]->getNom());
        self::assertSame('Something New', $fixture[0]->getPrenom());
        self::assertSame('Something New', $fixture[0]->getEmail());
        self::assertSame('Something New', $fixture[0]->getTelephone());
        self::assertSame('Something New', $fixture[0]->getTypeuser());
        self::assertSame('Something New', $fixture[0]->getMatricule());
        self::assertSame('Something New', $fixture[0]->getCIN());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new ProfessionnelSante();
        $fixture->setLogin('My Title');
        $fixture->setPassword('My Title');
        $fixture->setNom('My Title');
        $fixture->setPrenom('My Title');
        $fixture->setEmail('My Title');
        $fixture->setTelephone('My Title');
        $fixture->setTypeuser('My Title');
        $fixture->setMatricule('My Title');
        $fixture->setCIN('My Title');

        $this->repository->add($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/professionnel/sante/');
    }
}
