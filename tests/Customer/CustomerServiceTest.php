<?php

namespace Tests\Customer;


use App\App\Infra\DAO\Customer;
use App\Domain\Customer\CustomerService;
use App\Domain\Customer\Exception\CustomerNotFound;
use PHPUnit\Framework\TestCase;


class CustomerServiceTest extends TestCase
{
    public function testFindAllEmpty()
    {
        self::expectException(CustomerNotFound::class);
        $customerDAO = $this->getMockBuilder(Customer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $customerDAO->method('findAll')
            ->will($this->returnValue([]));


        $costumerService = new CustomerService(
            $customerDAO
        );

        $costumerService->findAll();
    }

    public function testFindAllNotEmpty()
    {
        $customerDAO = $this->getMockBuilder(Customer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $costumers = [
            'name' => 'Guilherme'
        ];

        $customerDAO->method('findAll')
            ->will(
                $this->returnValue($costumers)
            );

        $costumerService = new CustomerService(
            $customerDAO
        );

        $result = $costumerService->findAll();

        $this->assertEquals($costumers, $result);
    }
}
