<?php

namespace Beckenrode\VueGenerators\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\GeneratorCommand;

class MixinMakeCommand extends GeneratorCommand
{
    /**
     * The name of the console command.
     *
     * @var string
     */
    protected $name = 'make:vue-mixin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Vue mixin file';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Vue Mixin';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/../stubs/mixin.stub';
    }

    /**
     * Build the class with the given name.
     *
     * @param  string  $name
     * @return string
     */
    protected function buildClass($name)
    {
        return $this->files->get($this->getStub());
    }

    /**
     * Get the destination class path.
     *
     * @param  string  $name
     * @return string
     */
    protected function getPath($name)
    {
        return base_path() . config('vue-generators.mixins_path') . Str::replaceFirst($this->rootNamespace(), '', $name) . '.js';
    }
}
