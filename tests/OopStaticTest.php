<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class OopStaticTest extends TestCase
{
    /**
     * Create setup before class.
     * 
     * @return void
     */
    public static function setUpBeforeClass(): void
    {
        include_once __DIR__ . '/../src/assignments/oop-static/classes.php';
        include_once __DIR__ . '/../src/assignments/oop-static/interfaces.php';
        include_once __DIR__ . '/../src/assignments/oop-static/traits.php';
    }

    private $_animal_object;
    private $_reflector_animal_object;
    private $_reflector_attributes_object;
    private $_reflector_setget_object;

    /**
     * Create setup before test.
     * 
     * @return void
     */
    protected function setUp(): void
    {
        $this->assertTrue(class_exists(Animal::class), 'Class `Animal` is missing.');
        $this->assertTrue(class_exists(Attributes::class), 'Class `Attributes` is missing.');
        $this->assertTrue(interface_exists(SetGet::class), 'Interface `SetGet` is missing.');
        $this->assertTrue(trait_exists(Kudos::class), 'Trait `Kudos` is missing.');

        $this->_animal_object = new Animal('tiger', 'rawr');
        $this->_reflector_animal_object = new ReflectionClass(Animal::class);
        $this->_reflector_attributes_object = new ReflectionClass(Attributes::class);
        $this->_reflector_setget_object = new ReflectionClass(SetGet::class);
        $this->_reflector_kudos_object = new ReflectionClass(Kudos::class);

        $animal_parent_classes = $this->_reflector_animal_object->getParentClass();
        $this->assertNotFalse($animal_parent_classes, 'Class `Animal` is not extending any class.');

        $animal_parent_class_names = [];
        foreach ($animal_parent_classes as $animal_parent_class) {
            array_push($animal_parent_class_names, $animal_parent_class);
        }

        $this->assertContains('Attributes', $animal_parent_class_names, 'Class `Animal` is not extending class `Attributes`.');

        $animal_traits = $this->_reflector_animal_object->getTraitNames();
        $this->assertNotFalse($animal_traits, 'Class `Animal` is not using any traits.');

        $animal_traits_names = [];
        foreach ($animal_traits as $animal_trait) {
            array_push($animal_traits_names, $animal_trait);
        }

        $this->assertContains('Kudos', $animal_traits_names, 'Class `Animal` is not using trait `Kudos`.');

        $attributes_interfaces = $this->_reflector_attributes_object->getInterfaceNames();
        $this->assertNotFalse($attributes_interfaces, 'Class `Attributes` is not using any interface.');

        $attributes_interfaces_names = [];
        foreach ($attributes_interfaces as $attributes_interface) {
            array_push($attributes_interfaces_names, $attributes_interface);
        }

        $this->assertContains('SetGet', $attributes_interfaces_names, 'Class `Attributes` is not using interface `SetGet`.');
    }

    /**
     * Test properties / Access Modifiers.
     * 
     * @return void
     */
    public function testProperties()
    {
        $this->assertTrue(property_exists(Animal::class, 'species'), 'Class `Animal` is missing property `species`.');
        $this->assertTrue($this->_reflector_animal_object->getProperty('species')->isPublic(), 'Class `Animal` property `species` is not public.');

        $this->assertTrue(property_exists(Animal::class, 'kudos'), 'Class `Animal` is missing property `kudos`.');
        $this->assertTrue($this->_reflector_animal_object->getProperty('kudos')->isPublic(), 'Class `Animal` property `kudos` is not public.');

        $this->assertTrue(property_exists(Animal::class, 'calling'), 'Class `Animal` is missing property `calling`.');
        $this->assertTrue($this->_reflector_animal_object->getProperty('calling')->isProtected(), 'Class `Animal` property `calling` is not protected.');

        $this->assertTrue(property_exists(Attributes::class, 'weight'), 'Class `Attributes` is missing property `weight`.');
        $this->assertTrue($this->_reflector_animal_object->getProperty('weight')->isProtected(), 'Class `Attributes` property `weight` is not protected.');

        $this->assertTrue(property_exists(Attributes::class, 'height'), 'Class `Attributes` is missing property `height`.');
        $this->assertTrue($this->_reflector_animal_object->getProperty('calling')->isProtected(), 'Class `Attributes` property `height` is not protected.');

        $this->assertTrue(property_exists(Attributes::class, 'color'), 'Class `Attributes` is missing property `color`.');
        $this->assertTrue($this->_reflector_animal_object->getProperty('color')->isProtected(), 'Class `Attributes` property `color` is not protected.');

        $this->assertTrue(property_exists(Attributes::class, 'default'), 'Class `Attributes` is missing property `default`.');
        $this->assertTrue($this->_reflector_attributes_object->getProperty('default')->isPrivate(), 'Class `Attributes` property `default` is not private.');

        $this->assertTrue(property_exists(Attributes::class, 'weight_unit'), 'Class `Attributes` is missing property `weight_unit`.');
        $this->assertTrue($this->_reflector_attributes_object->getProperty('weight_unit')->isPrivate(), 'Class `Attributes` property `weight_unit` is not private.');
        $this->assertTrue($this->_reflector_attributes_object->getProperty('weight_unit')->isStatic(), 'Class `Attributes` property `weight_unit` is not static.');
    }

    /**
     * Test private property 'default'.
     * 
     * @return void
     */
    public function testDefaultProperty()
    {
        $default_property = $this->_reflector_attributes_object->getProperty('default');
        $default_property->setAccessible(true);
        $default_property_value = $default_property->getValue($this->_animal_object);

        $this->assertEquals('n/a', $default_property_value, 'Class `Attributes` property `default` value is not `n/a`.');
    }

    /**
     * Test private static property 'weight_unit'.
     * 
     * @return void
     */
    public function testWeightUnitProperty()
    {
        $weight_unit_property_value = $this->_reflector_attributes_object->getStaticPropertyValue('weight_unit');
        $this->assertEquals('kg', $weight_unit_property_value, 'Class `Attributes` property `weight_unit` value is not `kg`.');
    }


    /**
     * Test constants.
     * 
     * @return void
     */
    public function testConstants()
    {
        $this->assertArrayHasKey('CONJUNCTION', $this->_reflector_animal_object->getConstants(), 'Class `Animal` missing constant `CONJUNCTION`.');
        $this->assertEquals('says', $this->_animal_object::CONJUNCTION, 'Class `Animal` constant `CONJUNCTION` wrong value.');
    }

    /**
     * Test methods / Access Modifiers.
     * 
     * @return void
     */
    public function testMethods(): void
    {
        $this->assertTrue(method_exists(Animal::class, '__construct'), 'Class `Animal` is missing constructor.');
        $this->assertTrue(method_exists(Animal::class, '__destruct'), 'Class `Animal` is missing destructor.');

        $this->assertTrue(method_exists(Attributes::class, 'set_color'), 'Class `Attributes` is missing method `set_color`.');
        $this->assertTrue($this->_reflector_attributes_object->getMethod('set_color')->isPublic(), 'Class `Attributes` method `set_color` is not public.');

        $this->assertTrue(method_exists(Attributes::class, 'get_color'), 'Class `Attributes` is missing method `get_color`.');
        $this->assertTrue($this->_reflector_attributes_object->getMethod('get_color')->isPublic(), 'Class `Attributes` method `get_color` is not public.');

        $this->assertTrue(method_exists(SetGet::class, 'set_color'), 'Class `SetGet` is missing method `get_color`.');
        $this->assertTrue($this->_reflector_setget_object->getMethod('set_color')->isPublic(), 'Class `SetGet` method `set_color` is not public.');
        $this->assertTrue($this->_reflector_setget_object->getMethod('set_color')->isAbstract(), 'Class `SetGet` method `set_color` is not abstract.');

        $this->assertTrue(method_exists(SetGet::class, 'get_color'), 'Class `SetGet` is missing method `get_color`.');
        $this->assertTrue($this->_reflector_setget_object->getMethod('get_color')->isPublic(), 'Class `SetGet` method `get_color` is not public.');
        $this->assertTrue($this->_reflector_setget_object->getMethod('get_color')->isAbstract(), 'Class `SetGet` method `get_color` is not abstract.');

        $this->assertTrue(method_exists(Kudos::class, 'give_kudos'), 'Trait `Kudos` is missing method `give_kudos`.');
        $this->assertTrue($this->_reflector_kudos_object->getMethod('give_kudos')->isPublic(), 'Trait `Kudos` method `give_kudos` is not public.');

        $this->assertTrue(method_exists(Kudos::class, 'count_kudos'), 'Trait `Kudos` is missing method `count_kudos`.');
        $this->assertTrue($this->_reflector_kudos_object->getMethod('count_kudos')->isPublic(), 'Trait `Kudos` method `count_kudos` is not public.');

        $this->assertTrue(method_exists(Animal::class, 'get_weight_unit'), 'Class `Animall` is missing method `get_weight_unit`.');
        $this->assertTrue($this->_reflector_animal_object->getMethod('get_weight_unit')->isPublic(), 'Class `Animal` method `get_weight_unit` is not public.');

        $this->assertTrue($this->_reflector_animal_object->getMethod('get_weight_unit')->isStatic(), 'Class `Animal` method `get_weight_unit` is not static.');
    }

    /**
     * Test __construct method.
     * 
     * @param $value         mixed 
     * @param $is_acceptable bool 
     * 
     * @dataProvider stringDataProvider
     * 
     * @return void
     */
    public function testConstructMethod($value, bool $is_acceptable): void
    {
        $mockup_animal_object = $this->_reflector_animal_object->newInstance($value, $value);
        $calling_property = $this->_reflector_animal_object->getProperty('calling');
        $calling_property->setAccessible(true);
        $calling_property_value = $calling_property->getValue($mockup_animal_object);

        if ($is_acceptable) {
            $this->assertEquals($value, $mockup_animal_object->species, 'Class `Animal` constructor should set object property `species` value.');
            $this->assertIsString($mockup_animal_object->species, 'Class `Animal` property `species` value should be string.');

            $this->assertEquals($value, $calling_property_value, 'Class `Animal` constructor should set object property `calling` value.');
            $this->assertIsString($calling_property_value, 'Class `Animal` property `calling` value should be string.');
        } else {
            $this->assertNull($mockup_animal_object->species, 'Class `Animal` constructor should only accept string as object property `species` value.');
            $this->assertNull($calling_property_value, 'Class `Animal` constructor should only accept string as object property `calling` value.');
        }
    }

    /**
     * Test set_color method.
     * 
     * @param $value         mixed 
     * @param $is_acceptable bool 
     * 
     * @dataProvider stringDataProvider
     * 
     * @return void
     */
    public function testSetColortMethod($value, bool $is_acceptable): void
    {
        $this->_animal_object->set_color($value);

        if ($is_acceptable) {
            $this->assertEquals($value, $this->_animal_object->get_color(), 'Class `Attributes` method `set_color` should set object property `color` value.');
            $this->assertIsString($this->_animal_object->get_color(), 'Class `Attributes` property `color` value should be string.');
        } else {
            $this->assertEquals('n/a', $this->_animal_object->get_color(), 'Class `Attributes` method `get_color` should return object property `default` as fallback.');
        }
    }

    /**
     * Test give_kudos method.
     * 
     * @return Animal
     */
    public function testGiveKudosMethod(): Animal
    {
        $this->assertNull($this->_animal_object->kudos, 'Class `Animal` property `kudos` default value is not null.');

        for ($i = 0; $i < 10; $i++) {
            $this->_animal_object->give_kudos();

            $this->assertNotNull($this->_animal_object->kudos, 'Trait `Kudos` method `give_kudos` is not setting object property `kudos` value.');
            $this->assertIsNumeric($this->_animal_object->kudos, 'Class `Animal` property `kudos` should be numeric.');
            $this->assertEquals($i + 1, $this->_animal_object->kudos, 'Class `Animal` property `kudos` is not incremented correctly.');
        }
        $instance = clone $this->_animal_object;
        return $instance;
    }

    /**
     * Test count_kudos method.
     * 
     * @param Animal $instance 
     * 
     * @depends testGiveKudosMethod
     * 
     * @return void
     */
    public function testCountKudosMethod(Animal $instance): void
    {
        $this->assertEquals($instance->kudos, $instance->count_kudos(), 'Trait `Kudos` method `count_kudos` is not returning object property `kudos` value.');
    }

    /**
     * Test public static method 'get_weight_unit'.
     * 
     * @return void
     */
    public function testGetWeightUnitMethod()
    {
        Animal::get_weight_unit();
        $this->expectOutputString($this->_reflector_attributes_object->getStaticPropertyValue('weight_unit'));
    }

    /**
     * Test __desctruct method.
     * 
     * @return void
     */
    public function testDesctructMethod(): void
    {
        if ($this->hasOutput()) {
            $this->expectOutputString('string says string');
        }
    }

    /**
     * Create tear down after test.
     * 
     * @return void
     */
    public function tearDown(): void
    {
    }

    /**
     * Test data provider.
     * 
     * @return void
     */
    public function stringDataProvider()
    {
        return [
            [null, false],
            [false, false],
            [true, false],
            [0, false],
            ['string', true]
        ];
    }

    /**
     * Create tear down after class.
     * 
     * @return void
     */
    public static function tearDownAfterClass(): void
    {
    }
}
