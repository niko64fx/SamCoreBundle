<?php

namespace CanalTP\SamCoreBundle\Migrations\pdo_pgsql;

use Doctrine\DBAL\Schema\Schema;

class Version006 extends AbstractSamMigration
{
    const VERSION = '0.0.6';

    public function getName()
    {
        return self::VERSION;
    }

    public function up(Schema $schema)
    {
        if ($this->tableExists('migration_versions')) {
            $this->addSql('DROP TABLE public.migration_versions;');

            $this->addSql('CREATE TABLE public.doctrine_canaltpmatrixbundle_versions (version character varying(255) NOT NULL);');
            $this->addSql('INSERT INTO public.doctrine_canaltpmatrixbundle_versions (version) VALUES (\'0.0.1\');');
            $this->addSql('INSERT INTO public.doctrine_canaltpmatrixbundle_versions (version) VALUES (\'0.0.2\');');
            $this->addSql('INSERT INTO public.doctrine_canaltpmatrixbundle_versions (version) VALUES (\'0.0.3\');');

            $this->addSql('CREATE TABLE public.doctrine_canaltpmttbundle_versions (version character varying(255) NOT NULL);');
            $this->addSql('INSERT INTO public.doctrine_canaltpmttbundle_versions (version) VALUES (\'0.0.1\');');
            $this->addSql('INSERT INTO public.doctrine_canaltpmttbundle_versions (version) VALUES (\'0.0.2\');');
            $this->addSql('INSERT INTO public.doctrine_canaltpmttbundle_versions (version) VALUES (\'0.0.3\');');
            $this->addSql('INSERT INTO public.doctrine_canaltpmttbundle_versions (version) VALUES (\'0.0.4\');');
            $this->addSql('INSERT INTO public.doctrine_canaltpmttbundle_versions (version) VALUES (\'0.0.5\');');
            $this->addSql('INSERT INTO public.doctrine_canaltpmttbundle_versions (version) VALUES (\'0.0.6\');');
            $this->addSql('INSERT INTO public.doctrine_canaltpmttbundle_versions (version) VALUES (\'0.0.7\');');

            $this->addSql('CREATE TABLE public.doctrine_canaltpnmpadminbundle_versions (version character varying(255) NOT NULL);');
            $this->addSql('INSERT INTO public.doctrine_canaltpnmpadminbundle_versions (version) VALUES (\'0.0.1\');');
            $this->addSql('INSERT INTO public.doctrine_canaltpnmpadminbundle_versions (version) VALUES (\'0.0.2\');');

            $this->addSql('CREATE TABLE public.doctrine_canaltprealtimebundle_versions (version character varying(255) NOT NULL);');
            $this->addSql('INSERT INTO public.doctrine_canaltprealtimebundle_versions (version) VALUES (\'0.0.1\');');
            $this->addSql('INSERT INTO public.doctrine_canaltprealtimebundle_versions (version) VALUES (\'0.0.2\');');
        }
    }

    public function down(Schema $schema)
    {
        $this->addSql('DROP TABLE public.doctrine_canaltpmatrixbundle_versions;');
        $this->addSql('DROP TABLE public.doctrine_canaltpmttbundle_versions;');
        $this->addSql('DROP TABLE public.doctrine_canaltpnmpadminbundle_versions;');
        $this->addSql('DROP TABLE public.doctrine_canaltprealtimebundle_versions;');
        $this->addSql('DROP TABLE public.doctrine_canaltpsamcorebundle_versions;');

        $this->addSql('CREATE TABLE public.migration_versions (version character varying(255) NOT NULL);');
        $this->addSql('INSERT INTO public.migration_versions (version) VALUES (\'0.1.0\');');
        $this->addSql('INSERT INTO public.migration_versions (version) VALUES (\'0.1.1\');');
        $this->addSql('INSERT INTO public.migration_versions (version) VALUES (\'0.1.2\');');
        $this->addSql('INSERT INTO public.migration_versions (version) VALUES (\'0.1.3\');');
        $this->addSql('INSERT INTO public.migration_versions (version) VALUES (\'0.1.4\');');
        $this->addSql('INSERT INTO public.migration_versions (version) VALUES (\'0.2.0\');');
        $this->addSql('INSERT INTO public.migration_versions (version) VALUES (\'0.2.1\');');
        $this->addSql('INSERT INTO public.migration_versions (version) VALUES (\'0.3.2\');');
        $this->addSql('INSERT INTO public.migration_versions (version) VALUES (\'0.3.2.2\');');
        $this->addSql('INSERT INTO public.migration_versions (version) VALUES (\'0.3.3-1\');');
        $this->addSql('INSERT INTO public.migration_versions (version) VALUES (\'0.3.3-5\');');
        $this->addSql('INSERT INTO public.migration_versions (version) VALUES (\'0.3.3-6\');');
    }
}

