<?php

namespace Beckenrode\VueGenerators\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;

class ComponentMakeCommand extends GeneratorCommand
{
    /**
     * The name of the console command.
     *
     * @var string
     */
    protected $name = 'make:vue-component';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Vue component file';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Vue Component';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return config('vue-generators.component_stub', __DIR__.'/../stubs/component.stub');
    }

    /**
     * Build the class with the given name.
     *
     * @param string $name
     *
     * @return string
     */
    protected function buildClass($name)
    {
        return $this->files->get($this->getStub());
    }

    /**
     * Get the destination class path.
     *
     * @param string $name
     *
     * @return string
     */
    protected function getPath($name)
    {
        return base_path().config('vue-generators.components_path').Str::replaceFirst($this->laravel->getNamespace(), '', $name).'.vue';
    }
}
