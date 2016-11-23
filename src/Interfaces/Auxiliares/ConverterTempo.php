<?php

/**
 * Interface responsável por realizar transformações referentes a data e hora
 * 
 * @package     crphp
 * @subpackage  core
 * @author      Fábio J L Ferreira <contato@fabiojanio.com>
 * @license     MIT (consulte o arquivo license disponibilizado com este pacote)
 * @copyright   (c) 2016, Fábio J L Ferreira
 */

namespace Crphp\Core\Interfaces\Auxiliares;

interface ConverterTempo
{    
    /**
     * Método responsável por realizar a conversão do timestamp para um formato
     * de data/hora compreensivo
     * 
     * @param   string $timestamp
     * @param   string $formato
     * @return  string
     */
    public static function converterTimestamp($timestamp, $formato = "d/m/Y H:i:s");
}