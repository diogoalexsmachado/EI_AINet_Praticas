<?php

namespace Ainet\Models;

class User
{
    public $user_id;
    public $email;
    public $password;
    public $fullname;
    public $registered_at;
    public $type;

    public function __construct(array $attributes = [])
    {
        foreach ($attributes as $name => $value) {
            $this->$name = $value;
        }
    }

    public function typeToStr()
    {
        switch ($this->type) {
            case 0:
                return 'Administrator';
            case 1:
                return 'Publisher';
            case 2:
                return 'Client';
        }

        return 'Unknown';
    }

    public static function all()
    {
        return [
            1 => new self(['user_id' => 1, 'email' => 'ktorp@gmail.com', 'password' => '$2y$10$Mq/OxdBTA73g7ok5J9cE.OoYSLLZlLALc/mic3eOR6VfUNmjJOZr2',
                'fullname' => 'Cassandre Greenholt', 'type' => 0, 'registered_at' => '1982-04-29 03:22:51', ]),
            2 => new self(['user_id' => 2, 'email' => 'skyla75@gmail.com', 'password' => '$2y$10$2/tHKPbZlAB7p6c.eHaVWeyzv46eN7BU30g/b62n7W3.vIpMPS7bi',
                'fullname' => 'Arianna Ferry>', 'type' => 0, 'registered_at' => '1989-06-02 12:45:51', ]),
            3 => new self(['user_id' => 3, 'email' => 'bartoletti.denis@hotmail.com', 'password' => '$2y$10$a3WSXwdEnVzQoeYJMDwkRegUmAmTO5SYTI7DQhTL9MpRqPMUcphtq',
                'fullname' => 'Nayeli Morar', 'type' => 1, 'registered_at' => '2000-05-30 22:55:44', ]),
            4 => new self(['user_id' => 4, 'email' => 'gregg.kautzer@yahoo.com', 'password' => '$2y$10$cDx3wHXcNjvH50mrfbRVWeV4hb7OLL2JWoluvyoYAz.H9wcQqvBmK',
                'fullname' => 'Zetta Leannon', 'type' => 0, 'registered_at' => '1971-05-14 01:02:16', ]),
            5 => new self(['user_id' => 5, 'email' => 'hjerde@kuhic.biz', 'password' => '$2y$10$Y.ZAqs1T4TmJm9CTgYyzcu./1ZspcNNH9FZ6BbIiQ10U/DImbXIdy',
                'fullname' => 'Joelle Funk', 'type' => 1, 'registered_at' => '2004-05-10 13:07:37', ]),
            6 => new self(['user_id' => 6, 'email' => 'daphne.schuppe@torphy.com', 'password' => '$2y$10$j9QdUUcrj5Dakro/n/FMkurXbKS4YCDBBooArkPBcu0aAyojGV6D6',
                'fullname' => 'Kathleen Gleichner', 'type' => 2, 'registered_at' => '1973-10-11 03:09:03', ]),
            7 => new self(['user_id' => 7, 'email' => 'fjacobi@yahoo.com', 'password' => '$2y$10$dhzFGjF2pJATGXzSsyTHZu2EJGxbwyMUQ9SBG9uklsn99ZRsk6NQ2',
                'fullname' => 'Otha O\'Connell', 'type' => 0, 'registered_at' => '1999-03-21 17:05:29', ]),
            8 => new self(['user_id' => 8, 'email' => 'evans35@moore.com', 'password' => '$2y$10$WgmE7qmsLPedzGyp41sjDO1DmVM/XB5deCnsH9y7UIm1Ll2Sm.ODW',
                'fullname' => 'Callie Romaguera', 'type' => 2, 'registered_at' => '1989-12-29 01:24:29', ]),
            9 => new self(['user_id' => 9, 'email' => 'raquel30@gmail.com', 'password' => '$2y$10$zDGaW2Xv4olsqRCA9SDv0urkCA2T931jPvXu/k8nr/.lTQOsKwdK2',
                'fullname' => 'Cruz Rau', 'type' => 1, 'registered_at' => '2000-11-20 22:49:20', ]),
            10 => new self(['user_id' => 10, 'email' => 'trystan.donnelly@farrell.net', 'password' => '$2y$10$YwuPqRLEOgY9M/NsDu4LFuj.Ae6dxeLdGQU/gxrueHHrmK9SzV98K',
                'fullname' => 'Desiree Sipes', 'type' => 0, 'registered_at' => '1987-08-11 23:37:52', ]),
        ];
    }

    public static function find($userId)
    {
        $users = static::all();
        if (array_key_exists($userId, $users)) {
            return $users[$userId];
        }

        return;
    }

    public static function add($user)
    {
        var_dump($user);
        die('INSERT STATEMENT HERE');
    }

    public static function save($user)
    {
        var_dump($user);
        die('UPDATE STATEMENT HERE');
    }

    public static function delete($userId)
    {
        var_dump($userId);
        die('DELETE STATEMENT HERE');
    }
}
