# EncryptDecrypt

A simple PHP encryption and decryption system for encoding and decoding text using a character mapping system.

## **Description**

This project provides a basic encryption and decryption system in PHP. It uses a character-to-encoded value mapping to encrypt and decrypt messages. The system works by replacing characters with pre-defined encoded values and is suitable for simple data obfuscation.

## **Features**

- Encrypt and decrypt text using a character mapping system.
- Provides customizable encoding values for each character.
- Supports characters, punctuation, and special symbols.

## **Installation**

1. Clone the repository:
   ```bash
   git clone https://github.com/shayangolshan22/EncryptDecrypt.git
   cd EncryptDecrypt


### **Usage Example**

Here is a simple example to show how to use the `EncryptDecrypt` class to encrypt and decrypt a message:

```php
// Create an instance of EncryptDecrypt
$encryptDecrypt = new EncryptDecrypt();

// Original message
$originalMessage = "Hello, World!";

// Encrypt the message
$encryptedMessage = $encryptDecrypt->encrypt($originalMessage);
echo "Encrypted: " . $encryptedMessage . "<br>";

// Decrypt the message
$decryptedMessage = $encryptDecrypt->decrypt($encryptedMessage);
echo "Decrypted: " . $decryptedMessage . "<br>";

