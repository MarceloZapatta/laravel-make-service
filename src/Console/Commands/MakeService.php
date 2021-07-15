<?php

namespace Zapatta\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeService extends GeneratorCommand {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {name : Create a service class}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new service class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Service';

    /**
     * Execute the console command.
     *
     * @return bool|null
     *
     * @see \Illuminate\Console\GeneratorCommand
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function handle() {

    }



    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return $this->resolveStubPath('/service.stub');
    }

    /**
     * Resolve the fully-qualified path to the stub.
     *
     * @param  string  $stub
     * @return string
     */
    protected function resolveStubPath($stub)
    {
        return __DIR__ . '../stubs' . $stub;
    }
}
