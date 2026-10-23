<?php

use Symfony\Component\Process\Process;

class StarterKitPostInstall
{
    public function handle($console): void
    {
        $commands = [
            [
                'composer', 'config',
                'repositories.surgems-redirect-urls',
                'path', './local/redirect-urls/',
            ],
            [
                'composer', 'require',
                'surgems/redirect-urls:*',
                '--no-interaction',
            ],
        ];

        foreach ($commands as $command) {
            $process = new Process($command, base_path());
            $process->setTimeout(null);

            $process->mustRun(function ($type, $output) use ($console) {
                $console->getOutput()->write($output);
            });
        }
    }
}
