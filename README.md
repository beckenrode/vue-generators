# Laravel Vue Generators

[![StyleCI](https://styleci.io/repos/101144603/shield?branch=master)](https://styleci.io/repos/101144603)

This Laravel package provides the following two generators to speed up your Vue development process:

- `make:vue-component`
- `make:vue-mixin`

## Usage

### Step 1: Install Through Composer

```bash
composer require beckenrode/vue-generator
```

### Step 2: Add the Service Provider

#### Laravel 5.5
Laravel's <a href="https://laravel.com/docs/5.5/packages#package-discovery" target="_blank">Package Discovery</a> automatically discovers this package.

#### Laravel < 5.5
Open `config/app.php`, and add a new item to the Package Service Providers array.

```php
Beckenrode\VueGenerators\VueGeneratorsServiceProvider::class,
```

### Step 3: Configuration (Optional)

You may want to adjust your Component/Mixin stubs or change the path in which they are generated. To do this you simply need to publish the configuration file.

#### Laravel 5.5
```bash
php artisan vendor:publish
```

#### Laravel < 5.5
```bash
php artisan vendor:publish --provider="Beckenrode\VueGenerators\VueGeneratorsServiceProvider"
```

This will publish the following configuration file to `config/vue-generators.php`:

```php
<?php

return [

    /*
    * Location of the stubs to use
    */
    //'component_stub' => __DIR__.'/component.stub',
    //'mixin_stub' => __DIR__.'/mixin.stub',

    /*
    * Location of where to generate the files
    */
    'components_path' => '/resources/assets/js/components/',
    'mixins_path'     => '/resources/assets/js/mixins/'

];

```

## Examples

- [Vue Component](#vue-component)
- [Vue Mixin](#vue-mixin)

### Vue Component

```
php artisan make:vue-component MyNewComponent
```

This will generate the following `MyNewComponent.vue` Vue component in `/resources/assets/js/components/`:

```Vue
<template>

</template>

<script>
    export default {
        // Assets
        components: {},

        // Composition
        mixins: [],

        extends: {}

        // Data
        data() {
            return {}
        },

        props: {},

        propsData: {},

        computed: {},

        methods: {},

        watch: {},

        // Lifecycle Hooks
        beforeCreate() {},

        created() {},

        beforeMount() {},

        mounted() {},

        beforeUpdate() {},

        updated() {},

        activated() {},

        deactivated() {},

        beforeDestroy() {},

        destroyed() {}
    }
</script>

<style>

</style>
```

### Vue Mixin

```
php artisan make:vue-mixin MyNewMixin
```

This will generate the following `MyNewMixin.js` Vue mixin in `/resources/assets/js/mixins/`:

```JavaScript
export default {
    // Assets
    components: {},

    // Composition
    mixins: [],

    extends: {}

    // Data
    data() {
        return {}
    },

    props: {},

    propsData: {},

    computed: {},

    methods: {},

    watch: {},

    // Lifecycle Hooks
    beforeCreate() {},

    created() {},

    beforeMount() {},

    mounted() {},

    beforeUpdate() {},

    updated() {},

    activated() {},

    deactivated() {},

    beforeDestroy() {},

    destroyed() {}
}
```

## Testing

```bash

```

## Development

Want to contribute? Great!

## License

The MIT License (MIT)

**Free Software, Hell Yeah!**
