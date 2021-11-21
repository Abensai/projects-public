<?php

namespace App\DataFixtures;

use App\Entity\Administrator;
use App\Entity\Agent;
use App\Entity\Contact;
use App\Entity\Hideout;
use App\Entity\Mission;
use App\Entity\Nation;
use App\Entity\Speciality;
use App\Entity\Status;
use App\Entity\Target;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        //use Faker PHP
        $fakerRussian = Factory::create('ru_RU');
        $fakerAmerican = Factory::create('en_US');
        $fakerEnglish = Factory::create('en_GB');
        $fakerFrench = Factory::create('fr_FR');

        // Data Speciaity
        $specialityOne = new Speciality();
        $specialityOne->setName('Surveillance');
        $manager->persist($specialityOne);

        $specialityTwo = new Speciality();
        $specialityTwo->setName('Assassinat');
        $manager->persist($specialityTwo);

        $specialityThree = new Speciality();
        $specialityThree->setName('Infiltration');
        $manager->persist($specialityThree);

        // DATA Nation

        $nationOne = new Nation();
        $nationOne ->setCountry('Russia')
            ->setNationality('Russian')
            ->setLangage('Russe');
        $manager->persist($nationOne);

        $nationTwo = new Nation();
        $nationTwo ->setCountry('America')
            ->setNationality('American')
            ->setLangage('English');
        $manager->persist($nationTwo);

        $nationThree = new Nation();
        $nationThree ->setCountry('England')
            ->setNationality('English')
            ->setLangage('English');
        $manager->persist($nationThree);

        $nationFour = new Nation();
        $nationFour ->setCountry('France')
            ->setNationality('French')
            ->setLangage('French');
        $manager->persist($nationFour);

        // Data Agent
        $agentRussian = new Agent();

        $agentRussian->setFirstname($fakerRussian->firstName())
            ->setLastname($fakerRussian->lastName())
            ->setBirthday($fakerRussian->dateTime('1988-06-15'))
            ->setCodeName('001')
            ->setNation($nationOne)
            ->addSpeciality($specialityTwo);

        $manager->persist($agentRussian);

        $agentAmerican = new Agent();

        $agentAmerican->setFirstname($fakerAmerican->firstName())
            ->setLastname($fakerAmerican->lastName())
            ->setBirthday($fakerAmerican->dateTime('1987-06-15'))
            ->setCodeName('002')
            ->setNation($nationTwo)
            ->addSpeciality($specialityTwo)
            ->addSpeciality($specialityOne);

        $manager->persist($agentAmerican);

        $agentEnglish = new Agent();

        $agentEnglish->setFirstname($fakerEnglish->firstName())
            ->setLastname($fakerEnglish->lastName())
            ->setBirthday($fakerEnglish->dateTime('1985-06-15'))
            ->setCodeName('003')
            ->setNation($nationThree)
            ->addSpeciality($specialityOne);

        $manager->persist($agentEnglish);

        $agentFrench = new Agent();

        $agentFrench->setFirstname($fakerFrench->firstName())
            ->setLastname($fakerFrench->lastName())
            ->setBirthday($fakerFrench->dateTime('1980-06-15'))
            ->setCodeName('004')
            ->setNation($nationFour)
            ->addSpeciality($specialityTwo)
            ->addSpeciality($specialityOne)
            ->addSpeciality($specialityThree);

        $manager->persist($agentFrench);

        // Data Target
        $targetRussian = new Target();

        $targetRussian->setFirstname($fakerRussian->firstName())
            ->setLastname($fakerRussian->lastName())
            ->setBirthday($fakerRussian->dateTime('1988-06-15'))
            ->setCodeName('Moscow')
            ->setNation($nationOne);

        $manager->persist($targetRussian);

        $targetAmerican = new Target();

        $targetAmerican->setFirstname($fakerAmerican->firstName())
            ->setLastname($fakerAmerican->lastName())
            ->setBirthday($fakerAmerican->dateTime('1987-06-15'))
            ->setCodeName('Washington')
            ->setNation($nationTwo);

        $manager->persist($targetAmerican);

        $targetEnglish = new Target();

        $targetEnglish->setFirstname($fakerEnglish->firstName())
            ->setLastname($fakerEnglish->lastName())
            ->setBirthday($fakerEnglish->dateTime('1985-06-15'))
            ->setCodeName('London')
            ->setNation($nationThree);

        $manager->persist($targetEnglish);

        $targetFrench = new Target();

        $targetFrench->setFirstname($fakerFrench->firstName())
            ->setLastname($fakerFrench->lastName())
            ->setBirthday($fakerFrench->dateTime('1980-06-15'))
            ->setCodeName('Paris')
            ->setNation($nationFour);

        $manager->persist($targetFrench);

        // Data Contact
        $contactRussian = new Contact();

        $contactRussian->setFirstname($fakerRussian->firstName())
            ->setLastname($fakerRussian->lastName())
            ->setBirthday($fakerRussian->dateTime('1988-06-15'))
            ->setCodeName('Kazan')
            ->setNation($nationOne);

        $manager->persist($contactRussian);

        $contactAmerican = new Contact();

        $contactAmerican->setFirstname($fakerAmerican->firstName())
            ->setLastname($fakerAmerican->lastName())
            ->setBirthday($fakerAmerican->dateTime('1987-06-15'))
            ->setCodeName('Chicago')
            ->setNation($nationTwo);

        $manager->persist($contactAmerican);

        $contactEnglish = new Contact();

        $contactEnglish->setFirstname($fakerEnglish->firstName())
            ->setLastname($fakerEnglish->lastName())
            ->setBirthday($fakerEnglish->dateTime('1985-06-15'))
            ->setCodeName('Manchester')
            ->setNation($nationThree);

        $manager->persist($contactEnglish);

        $contactFrench = new Contact();

        $contactFrench->setFirstname($fakerFrench->firstName())
            ->setLastname($fakerFrench->lastName())
            ->setBirthday($fakerFrench->dateTime('1980-06-15'))
            ->setCodeName('Marseille')
            ->setNation($nationFour);

        $manager->persist($contactFrench);

        // Data Hideout

        $hideoutOne = new Hideout();

        $hideoutOne->setCode('01')
            ->setAddress($fakerRussian->address())
            ->setType('Loft')
            ->setNation($nationOne);

        $manager->persist($hideoutOne);

        $hideoutTwo = new Hideout();

        $hideoutTwo->setCode('02')
            ->setAddress($fakerAmerican->address())
            ->setType('yacht')
            ->setNation($nationTwo);

        $manager->persist($hideoutTwo);

        $hideoutThree = new Hideout();

        $hideoutThree->setCode('03')
            ->setAddress($fakerEnglish->address())
            ->setType('Factory')
            ->setNation($nationThree);;

        $manager->persist($hideoutThree);

        $hideoutFour = new Hideout();

        $hideoutFour->setCode('04')
            ->setAddress($fakerFrench->address())
            ->setType('Hotel')
            ->setNation($nationFour);

        $manager->persist($hideoutFour);

        //Data Administrator
        $adminOne = new Administrator();

        $adminOne->setFirstname($fakerAmerican->firstname())
            ->setLastname($fakerAmerican->lastName())
            ->setMail('adminone@admin.com')
            ->setPassword('Password01')
            ->setCreatedAt($fakerRussian->dateTime('2011-06-15'))
            ->setRoles(array('ROLE_USER', 'ROLE_ADMIN'));

        $manager->persist($adminOne);

        $adminTwo = new Administrator();

        $adminTwo->setFirstname($fakerAmerican->firstname())
            ->setLastname($fakerAmerican->lastName())
            ->setMail('admintwo@admin.com')
            ->setPassword('Password02')
            ->setCreatedAt($fakerRussian->dateTime('2009-06-15'))
            ->setRoles(array('ROLE_USER', 'ROLE_ADMIN'));

        $manager->persist($adminTwo);

        $adminThree = new Administrator();

        $adminThree->setFirstname($fakerAmerican->firstname())
            ->setLastname($fakerAmerican->lastName())
            ->setMail('adminthree@admin.com')
            ->setPassword('Password03')
            ->setCreatedAt($fakerRussian->dateTime('2007-06-15'))
            ->setRoles(array('ROLE_USER', 'ROLE_ADMIN'));

        $manager->persist($adminThree);

        $adminFour = new Administrator();

        $adminFour->setFirstname($fakerAmerican->firstname())
            ->setLastname($fakerAmerican->lastName())
            ->setMail('adminfour@admin.com')
            ->setPassword('Password04')
            ->setCreatedAt($fakerRussian->dateTime('2013-06-15'))
            ->setRoles(array('ROLE_USER', 'ROLE_ADMIN'));

        $manager->persist($adminFour);

        // Data Status

        $statusOne = new Status();
        $statusOne->setLabel('En préparation');

        $manager->persist($statusOne);

        $statusTwo = new Status();
        $statusTwo->setLabel('En cours');

        $manager->persist($statusTwo);

        $statusThree = new Status();
        $statusThree->setLabel('terminé');

        $manager->persist($statusThree);

        $statusFour = new Status();
        $statusFour->setLabel('Echec');

        $manager->persist($statusFour);

        // Data Mission
        $missionOne = new Mission();

        $missionOne->setTitle('Black OPS')
            ->setDescription($fakerRussian->text())
            ->setCodeName('Vangard')
            ->setDateStart($fakerEnglish->dateTimeBetween('-6 month', 'now'))
            ->setDateEnd($fakerEnglish->dateTimeBetween('-6 month', 'now'))
            ->setNation($nationThree)
            ->setSpeciality($specialityTwo)
            ->setStatus($statusFour);

        $manager->persist($missionOne);

        $missionTwo = new Mission();

        $missionTwo->setTitle('Ghosts')
            ->setDescription($fakerFrench->text())
            ->setCodeName('Treyarch')
            ->setDateStart($fakerEnglish->dateTimeBetween('-6 month', 'now'))
            ->setDateEnd($fakerEnglish->dateTimeBetween('-6 month', 'now'))
            ->setNation($nationFour)
            ->setSpeciality($specialityOne)
            ->setStatus($statusThree);

        $manager->persist($missionTwo);

        $missionThree = new Mission();
        $missionThree->setTitle('Advanced Warfare')
            ->setDescription($fakerFrench->text())
            ->setCodeName('Raven')
            ->setDateStart($fakerEnglish->dateTimeBetween('-6 month', 'now'))
            ->setDateEnd($fakerEnglish->dateTimeBetween('-6 month', 'now'))
            ->setNation($nationTwo)
            ->setSpeciality($specialityOne)
            ->setStatus($statusTwo);

        $manager->persist($missionThree);

        $missionFour = new Mission();
        $missionFour->setTitle('World At War')
            ->setDescription($fakerRussian->text())
            ->setCodeName('Infinity')
            ->setDateStart($fakerEnglish->dateTimeBetween('-6 month', 'now'))
            ->setDateEnd($fakerEnglish->dateTimeBetween('-6 month', 'now'))
            ->setNation($nationOne)
            ->setSpeciality($specialityOne)
            ->setStatus($statusOne);

        $manager->persist($missionFour);

        $manager->flush();
    }
}
