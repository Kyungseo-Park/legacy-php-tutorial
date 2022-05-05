<?php

$profile = <<<'CODE'
namespace KyungseoPark;

class About extends Me
{
    /** @return Collection|Project[] */
    public function getProjects(): Collection
    {
        return collect([
            ['레거시한 블로그 만들기', 'https://github.com/kyungseo-park/legacy-php-tutorial'],
        ])->mapInto(Project::class);
    }

    /** @return Knowledge[] */
    public function getDailyKnowledge(): array
    {
        return [
            Php::class,
            Laravel::class,
            Docker::class,
            MySQL::class,
            Redis::class,
            RestfulApi::class,
            Reactjs::class,
            Git::class,
            Jira::class,
            GitLab::class,
        ];
    }

    public function getProfiles(): array
    {
        return [
            'Website'    => 'https://kkyungvelyy.com',
            'Website'    => 'https://kspkar.link',
            'Website'    => 'https://reactjs.kr',
        ];
    }

    public function getContacts(): array
    {
        return [
            'Email'    => 'dev@kspark.link',
        ];
    }
}
CODE;
