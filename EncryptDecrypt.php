<?php

class EncryptDecrypt
{
    private $map;  // Mapping of characters to encrypted values
    private $reverseMap;  // Reverse map for decrypting encrypted strings

    public function __construct()
    {
        // The encryption map for each character, where the key is the character and the value is an array of possible encrypted values
        $this->map = [
            '0' => ['aWv', 'gbT', 'dfG'],
            '1' => ['bHG', 'cdP', 'hkJ'],
            '2' => ['cBN', 'lmU', 'nqQ'],
            '3' => ['dDD', 'pRT', 'rwB'],
            '4' => ['eJH', 'stJ', 'uvD'],
            '5' => ['fLP', 'wxF', 'yzV'],
            '6' => ['gMN', 'aPA', 'bCL'],
            '7' => ['hYI', 'cPX', 'dTG'],
            '8' => ['PGY', 'eqF', 'fTR'],
            '9' => ['PSG', 'fcb', 'rea'],
            'A' => ['bHt', 'yKn', 'pXu'],
            'B' => ['sMp', 'gDh', 'oFx'],
            'C' => ['qLm', 'aPz', 'rWj'],
            'D' => ['zXs', 'rBw', 'yOd'],
            'E' => ['vYq', 'oVn', 'iFw'],
            'F' => ['wHl', 'mCv', 'gQx'],
            'G' => ['xNp', 'sGj', 'tLu'],
            'H' => ['yQr', 'uKf', 'pVt'],
            'I' => ['zXh', 'jFg', 'mWo'],
            'J' => ['aBn', 'oEr', 'gWk'],
            'K' => ['cHp', 'wKu', 'dMs'],
            'L' => ['eIq', 'jGr', 'kWu'],
            'M' => ['pKs', 'lHm', 'oXy'],
            'N' => ['qJx', 'iZb', 'vLp'],
            'O' => ['rLz', 'oYk', 'wMb'],
            'P' => ['sWx', 'aGf', 'tYj'],
            'Q' => ['tKa', 'dJq', 'zPf'],
            'R' => ['uLv', 'yNt', 'eBx'],
            'S' => ['vMu', 'cPf', 'aQs'],
            'T' => ['wNv', 'hQk', 'rPu'],
            'U' => ['xOp', 'fJv', 'zVr'],
            'V' => ['yLq', 'sWf', 'pXv'],
            'W' => ['zHr', 'lMk', 'tOu'],
            'X' => ['aKr', 'vJp', 'wLs'],
            'Y' => ['bLs', 'fZx', 'qNz'],
            'Z' => ['cMt', 'gVq', 'rYw'],
            'a' => ['dWq', 'bXa', 'vFg'],
            'b' => ['eXu', 'cVp', 'wJm'],
            'c' => ['fVv', 'dQs', 'tZy'],
            'd' => ['gWm', 'eYr', 'vXa'],
            'e' => ['hXg', 'fZr', 'wYs'],
            'f' => ['iYh', 'gXz', 'xZa'],
            'g' => ['jZi', 'hYq', 'yWn'],
            'h' => ['kZj', 'iXp', 'zWv'],
            'i' => ['lZk', 'jYq', 'aWf'],
            'j' => ['mAl', 'kZp', 'bXr'],
            'k' => ['nBm', 'lAp', 'cYs'],
            'l' => ['oCn', 'mBq', 'dZt'],
            'm' => ['pCo', 'nAr', 'eYs'],
            'n' => ['qDp', 'oBs', 'fZx'],
            'o' => ['rEq', 'pCt', 'gYa'],
            'p' => ['sFr', 'qDu', 'hZb'],
            'q' => ['tGs', 'rEv', 'iYa'],
            'r' => ['uHt', 'sFw', 'jZc'],
            's' => ['vIu', 'tGx', 'kYa'],
            't' => ['wJv', 'uHx', 'lZb'],
            'u' => ['xKw', 'vIu', 'mZc'],
            'v' => ['yLx', 'wJv', 'nZd'],
            'w' => ['zMy', 'xKw', 'oYe'],
            'x' => ['aNz', 'yLx', 'pZf'],
            'y' => ['bOa', 'zMy', 'qXg'],
            'z' => ['cPb', 'aNz', 'rYh'],
            ' ' => ['kZw', 'vXf', 'yHn'],
            '!' => ['mLp', 'sNq', 'xKc'],
            '?' => ['tMv', 'wJr', 'pXs'],
            '.' => ['uNx', 'yKr', 'zHf'],
            ',' => ['vBy', 'zIc', 'xGp'],
            '@' => ['wCv', 'aJr', 'pLm'],
            '#' => ['xDp', 'bKw', 'tNo'],
            '$' => ['yEo', 'cLr', 'uPj'],
            '%' => ['zFp', 'dMq', 'vKs'],
            '^' => ['aGq', 'eNr', 'wXy'],
            '&' => ['bHs', 'fTo', 'xVy'],
            '*' => ['cJv', 'gUp', 'yZw'],
            '(' => ['dKx', 'hVt', 'zXy'],
            ')' => ['eLw', 'iYq', 'aZf'],
            '-' => ['fMx', 'jZw', 'bLr'],
            '+' => ['gNy', 'kXv', 'cQd'],
            '=' => ['hOz', 'lYw', 'dRi'],
            '[' => ['iPa', 'mXy', 'eQs'],
            ']' => ['jQb', 'nYz', 'fRt'],
            '{' => ['kRc', 'oZa', 'gSu'],
            '}' => ['lSd', 'pAb', 'hTv'],
            ';' => ['mTe', 'qBc', 'iUw'],
            ':' => ['nUf', 'rCd', 'jXw'],
            '"' => ['oVg', 'sDe', 'kYz'],
            '\'' => ['pWh', 'tEf', 'lZa'],
            '<' => ['qXi', 'uFg', 'mYc'],
            '>' => ['rYj', 'vGh', 'nZa'],
            '/' => ['sZk', 'wHi', 'oYb'],
            '\\' => ['tAl', 'xIj', 'pZc'],
            '_' => ['uBm', 'yJk', 'qLd'],
            '|' => ['vCn', 'zKl', 'rMe'],
            '~' => ['wDo', 'aLm', 'sNf'],
        ];

        // Reverse the map for decrypting by creating an inverse of the mapping
        $this->reverseMap = array_reduce(array_keys($this->map), function ($carry, $digit) {
            foreach ($this->map[$digit] as $option) {
                $carry[$option] = $digit;
            }
            return $carry;
        }, []);
    }

    // Encrypt the input string
    public function encrypt($input)
    {
        $encrypted = array_map(function ($char) {
            // For each character, select a random encrypted value from the map
            $choices = $this->map[$char] ?? ['???'];  // Default to '???' if character is not found in the map
            return $choices[array_rand($choices)];  // Randomly choose one of the options for encryption
        }, str_split($input));

        // Return the encrypted string
        return implode('', $encrypted);
    }

    // Decrypt the encrypted string
    public function decrypt($encryptedString)
    {
        // Split the encrypted string into chunks of 3 characters
        $chunks = str_split($encryptedString, 3);
        // Map each chunk to its corresponding character using the reverse map
        return implode('', array_map(function ($chunk) {
            return $this->reverseMap[$chunk] ?? '?';  // Default to '?' if chunk is not found in the reverse map
        }, $chunks));
    }
}

// Create an instance of the EncryptDecrypt class
$encryptDecrypt = new EncryptDecrypt();

// Encrypt a message
$originalMessage = "Hello, World!";  // Message to encrypt
$encryptedMessage = $encryptDecrypt->encrypt($originalMessage);  // Call the encrypt function

// Decrypt the encrypted message
$decryptedMessage = $encryptDecrypt->decrypt($encryptedMessage);  // Call the decrypt function

// Output the results
echo "Original Message: $originalMessage <br>";  // Display the original message
echo "Encrypted Message: $encryptedMessage <br>";  // Display the encrypted message
echo "Decrypted Message: $decryptedMessage <br>";  // Display the decrypted message
