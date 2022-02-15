<?php

namespace BitBoss\LaravelTerminalUsers\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class LaravelTerminalUsersCommand extends Command
{
    public $signature = 'bitboss:manage-users';

    public $description = 'My command';

    public function handle(): int
    {
        $this->config = config('manage-terminal-users');

        $user = $this->askForEmail();

        $password = $this->promptForPassword($user);

        $user->{$this->config['field_to_update']} = Hash::make($password);

        return self::SUCCESS;
    }

    private function askForEmail()
    {
        $value = $this->ask("What's the user's {$this->config['field_to_check']}?");

        $model = config('auth.providers.users.model');

        $query = $model::query();

        if (! $query->where($this->config['field_to_check'], $value)->exists()) {
            $this->warn('No user found. Try again');

            return $this->askForEmail();
        }

        $user = $query->where($this->config['field_to_check'], $value)->first();
        $this->info("Great! I found {$user->{$this->config['field_to_check']}}");

        return $user;
    }

    private function promptForPassword($user)
    {
        $password = $this->ask("Ok, now choose a password");

        if ($this->isValidPassword($password)) {
            return $password;
        }

        $this->warn('Password not valid.');

        return $this->promptForPassword($user);
    }

    private function isValidPassword($password)
    {
        return strlen($password) > 0;
    }
}
