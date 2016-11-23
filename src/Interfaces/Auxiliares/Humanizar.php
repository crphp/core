<?php

/**
 * Interface responsável por realizar conversões. Tornar os valores mais "humanos"
 * 
 * @package     crphp
 * @subpackage  core
 * @author      Fábio J L Ferreira <contato@fabiojanio.com>
 * @license     MIT (consulte o arquivo license disponibilizado com este pacote)
 * @copyright   (c) 2016, Fábio J L Ferreira
 */

namespace Crphp\Core\Interfaces\Auxiliares;

interface Humanizar
{
    /**
     * Método responsável por converter capacidade de Byte para um formato humano
     * 
     * @param   string $valor
     * @return  string
     */
    public static function converterBytes($valor);
    
    /**
     * Método responsável por converter capacidade de KiloByte para um formato humano
     * 
     * @param   string $valor
     * @return  string
     */
    public static function converterKilobyte($valor);
}