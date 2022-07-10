<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class OopConstructorDestructorTest extends TestCase
{
    /**
     * Create setup before class.
     * 
     * @return void
     */
    public static function setUpBeforeClass(): void
    {
        include_once  __DIR__ . '/../src/assignments/oop-constructor-destructor/classes.php';
    }

    private $_animal_object;
    private $_reflector_animal_object;

    /**
     * Create setup before test.
     * 
     * @return void
     */
    protected function setUp(): void
    {
        $this->assertTrue(class_exists(Animal::class), 'Class `Animal` is missing.');

        $this->_animal_object = new Animal('tiger', 'rawr');
        $this->_reflector_animal_object = new ReflectionClass(Animal::class);
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
        $this->assertTrue(method_exists(Animal::class, '__destruct'), 'Class `Animal` is missing destructor.');
        $this->assertTrue(method_exists(Animal::class, '__construct'), 'Class `Animal` is missing constructor.');
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
