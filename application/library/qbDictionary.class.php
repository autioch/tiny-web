<?php

/**
 * Translates strings, based on dictionary supplied by a user.
 */
class qbDictionary implements ArrayAccess
{
    private $dictionary = [];
    private $language;

    /**
     * @param array  $dict Array of words with arrays of translations
     * @param string $lang Two-letter declaration of a language
     */
    public function __construct(array $dict, $lang)
    {
        $this->setDictionary($dict);
        $this->setLanguage($lang);
    }

    /**
     * Sets active language, to which words are translated.
     *
     * @param string $lang Two-letter declaration of a language
     */
    public function setLanguage($lang)
    {
        $this->language = $lang;
    }

    /**
     * Returns active language, to which words are translated.
     *
     * @return string Two-letter declaration of a language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Returns active language, to which words are translated.
     *
     * @return string Two-letter declaration of a language
     */
    public function lang()
    {
        return $this->getLanguage();
    }

    /**
     * Sets dictionary that will be used for translations.
     *
     * @param array $dict Array of words with arrays of translations
     */
    public function setDictionary(array $dict)
    {
        $this->dictionary = $dict;
    }

    /**
     * Returns dictionary that is used for translations.
     *
     * @return array Array of words with arrays of translations
     */
    public function getDictionary()
    {
        return $this->dictionary;
    }

    /*
      public function __get($word) {
      return $this->get($word, $this->language);
      }
     */

    /**
     * Returns word translated to any language existing in dictionary.
     *
     * @param string $word String to translate
     * @param string $lang Language to translate
     *
     * @return string Translated word if it exists in dictionary or empty string
     */
    public function get(string $word, string $lang)
    {
        if (array_key_exists($word, $this->dictionary)) {
            if (array_key_exists($lang, $this->dictionary[$word])) {
                return $this->dictionary[$word][$lang];
            }

            return '';
        }

        return '';
    }

    /**
     * Enforced by ArrayAccess, allows using instance of qbDictionary as an array.
     *
     * @param string $word
     * @param string $dict
     */
    public function offsetSet($word, $dict)
    {
        $this->dictionary[$word] = $dict;
    }

    /**
     * Enforced by ArrayAccess, allows using instance of qbDictionary as an array.
     *
     * @param string $word
     *
     * @return string
     */
    public function offsetExists($word)
    {
        return isset($this->container[$word]);
    }

    /**
     * Enforced by ArrayAccess, allows using instance of qbDictionary as an array.
     *
     * @param string $word
     */
    public function offsetUnset($word)
    {
        unset($this->dictionary[$word]);
    }

    /**
     * Enforced by ArrayAccess, allows using instance of qbDictionary as an array.
     *
     * @param string $word
     *
     * @return string
     */
    public function offsetGet($word)
    {
        if (array_key_exists($word, $this->dictionary)) {
            if (array_key_exists($this->language, $this->dictionary[$word])) {
                return $this->dictionary[$word][$this->language];
            }

            return '';
        }

        return '';
    }
}
