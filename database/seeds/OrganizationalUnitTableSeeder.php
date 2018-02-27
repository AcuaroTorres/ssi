<?php

use Illuminate\Database\Seeder;

class OrganizationalUnitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 1, 'name' => 'Dirección', 'organizational_unit_id' => NULL]);
            $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 2, 'name' => 'Subdirección de Gestion Asistencial', 'organizational_unit_id' => 1]);
                $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 15, 'name' => 'Departamento de Red de Salud Mental', 'organizational_unit_id' => 2]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 30, 'name' => 'Gestión de Establecimientos y Dispositivos', 'organizational_unit_id' => 15]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 31, 'name' => 'Gestión de Recursos de Salud Mental', 'organizational_unit_id' => 15]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 32, 'name' => 'Modelo de Gestión de Salud Mental', 'organizational_unit_id' => 15]);
                $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 16, 'name' => 'Departamento de Redes Hospitalarias', 'organizational_unit_id' => 2]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 33, 'name' => 'Unidad de Gestión de Demanda', 'organizational_unit_id' => 16]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 34, 'name' => 'Gestión de Procesos Clínicos', 'organizational_unit_id' => 16]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 35, 'name' => 'Gestión de Recursos e Inversiones', 'organizational_unit_id' => 16]);
                $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 17, 'name' => 'Departamento de APS y Redes', 'organizational_unit_id' => 2]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 36, 'name' => 'Unidad de Salud Familiar', 'organizational_unit_id' => 17]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 37, 'name' => 'Unidad de Planes y Programas', 'organizational_unit_id' => 17]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 38, 'name' => 'Unidad de Gestión de Recursos e Inversiones', 'organizational_unit_id' => 17]);
                $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 18, 'name' => 'Departamento de Red de urgencias', 'organizational_unit_id' => 2]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 39, 'name' => 'S.A.M.U.', 'organizational_unit_id' => 18]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 40, 'name' => 'Establecimientos de Red de Urgencias', 'organizational_unit_id' => 18]);
                $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 19, 'name' => 'Departamento de Planificación y Control de Redes', 'organizational_unit_id' => 2]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 41, 'name' => 'Unidad TIC', 'organizational_unit_id' => 19]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 42, 'name' => 'Unidad Epidemiología', 'organizational_unit_id' => 19]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 43, 'name' => 'Unidad de Gestión de Información', 'organizational_unit_id' => 19]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 44, 'name' => 'Unidad de Gestión y Control', 'organizational_unit_id' => 19]);
                $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 20, 'name' => 'Consultorio General urbano Dr. Hector Reyno', 'organizational_unit_id' => 2]);
                $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 21, 'name' => 'P.E.S.P.I.', 'organizational_unit_id' => 2]);
                $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 22, 'name' => 'P.R.A.I.S.', 'organizational_unit_id' => 2]);
            $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 3, 'name' => 'Subdirección de Recursos Físicos y Financieros', 'organizational_unit_id' => 1]);
                $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 23, 'name' => 'Departamento de Gestión de Recursos Físicos e Inversiones de la Red', 'organizational_unit_id' => 3]);
                $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 24, 'name' => 'Departamento de Gestión de Abastecimiento y Logística', 'organizational_unit_id' => 3]);
                $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 25, 'name' => 'Departamento de Gestión Financiera', 'organizational_unit_id' => 3]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 45, 'name' => 'Sección de Planificación, Análisis y Control Financiera y Presupuestaria', 'organizational_unit_id' => 25]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 46, 'name' => 'Sercción de Cobranzas', 'organizational_unit_id' => 25]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 47, 'name' => 'Sección de Contabilidad', 'organizational_unit_id' => 25]);
            $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 4, 'name' => 'Subdirección de Recursos Humanos', 'organizational_unit_id' => 1]);
                $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 26, 'name' => 'Departamento de Gestión de Recursos Humanos', 'organizational_unit_id' => 4]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 48, 'name' => 'Unidad de Personal y Ciclo de Vida laboral', 'organizational_unit_id' => 26]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 49, 'name' => 'Unidad Formación y Capacitación', 'organizational_unit_id' => 26]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 50, 'name' => 'Unidad de Reclutamiento y Selección de Personal', 'organizational_unit_id' => 26]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 51, 'name' => 'Unidad de Remuneraciones', 'organizational_unit_id' => 26]);
                $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 27, 'name' => 'Departamento de Calidad de Vida Laboral', 'organizational_unit_id' => 4]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 52, 'name' => 'Unidad de Bienestar', 'organizational_unit_id' => 27]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 53, 'name' => 'Unidad de Apoyo Social del Personal', 'organizational_unit_id' => 27]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 54, 'name' => 'Unidad de Clima Laboral', 'organizational_unit_id' => 27]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 55, 'name' => 'Unidad de Salud del Trabajador', 'organizational_unit_id' => 27]);
                $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 28, 'name' => 'Departamento de Salud Ocupacional', 'organizational_unit_id' => 4]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 56, 'name' => 'Unidad de Prevención de Riesgos', 'organizational_unit_id' => 28]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 57, 'name' => 'Unidad de Salud Ocupacional', 'organizational_unit_id' => 28]);
                    $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 58, 'name' => 'Unidad de Gestión Ambiental', 'organizational_unit_id' => 28]);
                $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 29, 'name' => 'Planificación y Control de Gestión de Recursos Humanos', 'organizational_unit_id' => 4]);
            $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 5, 'name' => 'Departamento de Auditoria Interna', 'organizational_unit_id' => 1]);
            $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 6, 'name' => 'Departamento de Asesoría Jurídica', 'organizational_unit_id' => 1]);
            $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 7, 'name' => 'Departamento de Planificación y Control de Gestión', 'organizational_unit_id' => 1]);
            $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 8, 'name' => 'Departamento de Relaiones Públicas y Comunicaciones', 'organizational_unit_id' => 1]);
            $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 9, 'name' => 'Departamento de Participación Social, Gestión al usuario y Gobernanza', 'organizational_unit_id' => 1]);
            $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 10, 'name' => 'Unidad de Secretaría y Oficina de Partes', 'organizational_unit_id' => 1]);
            $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 11, 'name' => 'Unidad de Gestión del Riesgo en Emergencias y Desastres', 'organizational_unit_id' => 1]);
            $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 12, 'name' => 'Unidad de Relaciones Laborales', 'organizational_unit_id' => 1]);
            $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 13, 'name' => 'Unidad de Calidad y Seguridad del Paciente', 'organizational_unit_id' => 1]);
            $organizationalunit = App\rrhh\OrganizationalUnit::create(['id' => 14, 'name' => 'Unidad de Relación Asistencial Docente', 'organizational_unit_id' => 1]);
    }
}
