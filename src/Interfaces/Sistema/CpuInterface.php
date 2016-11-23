<?php

/**
 * Assinatura dos métodos básicos para consultar dados referentes a CPU
 * 
 * @package     crphp
 * @subpackage  core
 * @author      Fábio J L Ferreira <contato@fabiojanio.com>
 * @license     MIT (consulte o arquivo license disponibilizado com este pacote)
 * @copyright   (c) 2016, Fábio J L Ferreira
 */

namespace Crphp\Core\Interfaces\Sistema;

use Crphp\Core\Sistema\Conector;

interface CpuInterface
{
    /**
     * Consulta as informações da CPU(s) reconhecida(s) pelo host remoto
     * 
     * @param \Crphp\Wmi\Conectores\Conector $conexao
     * @return null
     */
    public function __construct(Conector $conexao);

    /**
     * Retorna visão geral referente a CPU
     * 
     * @return array
     */
    public function detalhes();
}