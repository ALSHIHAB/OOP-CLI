<?php

class CliApp
{
    protected $input;
    protected $splittedInput;

    public function __construct()
    {
        set_error_handler(function ($severity, $message, $file, $line) {
            throw new \ErrorException($message, $severity, $severity, $file, $line);
        });
        $this->showGreetings();
        $this->getUserInput();
        $this->exportCSV();
    }

    public function showGreetings()
    {
        fputs(STDOUT, "\nWelcome to the App\n");
    }

    public function getUserInput()
    {
        fputs(STDOUT, "\nEnter some text below:\n");
        $this->input = strtolower(trim(fgets(STDIN, 256)));
        $this->splittedInput = str_split($this->input);

        // Print in uppercase
        fputs(STDOUT, "\n" . strtoupper($this->input) . "\n");

        $characters = "";
        foreach ($this->splittedInput as $i => $character) {
            if ($i % 2) {
                $characters .= strtoupper($character);
            } else {
                $characters .= $character;
            }
        }
        // Print alternate upper and lower
        fputs(STDOUT, "\n" . $characters . "\n");
    }

    public function exportCSV()
    {
        $fileName = uniqid('cli_export_') . '.csv';
        try {
            $fp = fopen($fileName, 'w');
            fputcsv($fp, $this->splittedInput);
            fputs(STDOUT, "\nCSV created! File: $fileName\n");
        } catch (\ErrorException $e) {
            fputs(STDOUT, "\nPermission denied, please make project root directory as writable.\n");
        }
        
    }
}

// Run Application
new CliApp();
?>