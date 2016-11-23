<?php

/**
 * Classe utilizada para formatar valores relacionados a capacidade
 * 
 * @package     crphp
 * @subpackage  core
 * @author      Fábio J L Ferreira <contato@fabiojanio.com>
 * @license     MIT (consulte o arquivo license disponibilizado com este pacote)
 * @copyright   (c) 2016, Fábio J L Ferreira
 */

namespace Crphp\Core\Auxiliares;

use Crphp\Core\Interfaces\Auxiliares\Humanizar;

class Capacidade implements Humanizar
{
    /**
     * Método responsável por converter capacidade de Byte para um formato humano
     * 
     * @param   string $valor
     * @return  string
     */
    public static function converterBytes($valor)
    {
        $capacidade = (float) $valor;
        
        if ($capacidade >= 1099511627776) {
            $capacidade = sprintf('%.2f TB', $capacidade / 1099511627776);
        } elseif ($capacidade >= 1073741824) {
            $capacidade = sprintf('%.2f GB', $capacidade / 1073741824);
        } elseif ($capacidade >= 1048576) {
            $capacidade = sprintf('%.2f MB', $capacidade / 1048576);
        } elseif ($capacidade >= 1024) {
            $capacidade = sprintf('%.2f KB', $capacidade / 1024);
        } else {
            $capacidade = sprintf('%.2f B', $capacidade);
        }

        return $capacidade;
    }

    /**
     * Método responsável por converter capacidade de KiloByte para um formato humano
     * 
     * @param   string $valor
     * @return  string
     */
    public static function converterKilobyte($valor)
    {
        $capacidade = (float) $valor;
        
        if ($capacidade >= 1073741824) {
            $capacidade = sprintf('%.2f TB', $capacidade / 1073741824);
        } elseif ($capacidade >= 1048576) {
            $capacidade = sprintf('%.2f GB', $capacidade / 1048576);
        } elseif ($capacidade >= 1024) {
            $capacidade = sprintf('%.2f MB', $capacidade / 1024);
        } else {
            $capacidade = sprintf('%.2f KB', $capacidade);
        }

        return $capacidade;
    }
}