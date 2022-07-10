<?php

declare(strict_types=1);


use PHPUnit\Framework\TestCase;

final class OopInheritanceTest extends TestCase
{
    /**
     * Create setup before class.
     * 
     * @return void
     */
    public static function setUpBeforeClass(): void
    {
        include_once __DIR__ . '/../src/assignments/oop-inheritance/classes.php';
    }

    private $_animal_object;
    private $_reflector_animal_object;
    private $_reflector_attributes_object;

    /**
     * Create setup before test.
     * 
     * @return void
     */
    protected function setUp(): void
    {
        $this->assertTrue(class_exists(Animal::class), 'Class `Animal` is missing.');
        $this->assertTrue(class_exists(Attributes::class), 'Class `Attributes` is missing.');

        $this->_animal_object = new Animal('tiger', 'rawr');
        $this->_reflector_animal_object = new ReflectionClass(Animal::class);
        $this->_reflector_attributes_object = new ReflectionClass(Attributes::class);

        $animal_parent_classes = $this->_reflector_animal_object->getParentClass();
        $this->assertNotFalse($animal_parent_classes, 'Class `Animal` is not extending any class.');

        $animal_parent_class_names = [];
        foreach ($animal_parent_classes as $animal_parent_class) {
            array_push($animal_parent_class_names, $animal_parent_class);
        }

        $this->assertContains('Attributes', $animal_parent_class_names, 'Class `Animal` is not extending class `Attributes`.');
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
