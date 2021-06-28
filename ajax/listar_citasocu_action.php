<?php
session_start();
require_once ("../config/conexion.php");

    $BD = "CLTACNA_TEST_PRUEBA";
    $COD_SUCURSAL = "001";

    $ID_USUARIO = $_SESSION['cod_usuario'];
    $sql_medico="SELECT COD_MEDICO FROM  CVE_MEDICO  WHERE COD_USUARIO_MEDICO = '$ID_USUARIO'  ";
    $query_medico = sqlsrv_query($conn, $sql_medico);
    while ($row_m=sqlsrv_fetch_array($query_medico))
    {
    $ID_MEDICO=$row_m['COD_MEDICO'];        
    }

    $action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';

    if($action == 'ajax')
    {

    $FEC = $_REQUEST['fec'];
    
    $Table = "A.COD_ATENCION, V.FEC_EMISION, V.COD_DOCUMENTO, A.COD_MEDICO, A.FEC_ATENCION, C.NOM_PACIENTE AS NOMBRE, C.APE_PATERNO AS APATERNO, C.APE_MATERNO AS AMATERNO , D.HORARIO AS HORARIO, E.COD_COBERTURA AS DES_CONCEPTO, F.DES_COBERTURA CONCEPTO , A.TIP_ESTADO, F.COD_COBERTURA";
    $InnerJoin = "$BD..VEN_COMPROBANTES V RIGHT JOIN ($BD..ADM_ATENCION A INNER JOIN $BD..ADM_EXPEDIENTE B ON A.COD_EXPEDIENTE = B.COD_EXPEDIENTE INNER JOIN $BD..ADM_PACIENTE C ON B.COD_PACIENTE = C.COD_PACIENTE INNER JOIN $BD..VISTA_HORAS D ON A.IDE_HORA_INICIO = D.IDE_HORA INNER JOIN $BD..ADM_ATENCION_COBERTURA E ON A.COD_ATENCION = E.COD_ATENCION INNER JOIN $BD..CVE_COBERTURA F ON E.COD_COBERTURA= F.COD_COBERTURA) ON V.COD_ATENCION = A.COD_ATENCION";  
    $Where="CONVERT(DATE,A.FEC_ATENCION) = '$FEC' AND A.COD_MEDICO = '$ID_MEDICO' AND F.TIP_COBERTURA = 'AMB' AND V.COD_SUCURSAL = '$COD_SUCURSAL'  ORDER BY A.FEC_ATENCION DESC ";
    
    $sql="SELECT $Table FROM $InnerJoin WHERE $Where";

    $query = sqlsrv_query($conn, $sql);?>

            <div class="table-responsive m-t-10">
            <table id="myTable" style="width:100%" class="table table-bordered table-striped" >

                <thead>
                <tr>
                    
                    <th>Concepto</th>     
                    <th>Paciente</th>
                    <th>Estado</th>
                    
                    <th>Acciones</th>
                   
                </tr>
                </thead>

                <tbody><?php

                while ($row=sqlsrv_fetch_array($query))
                {

                    $cod_atencion=$row['COD_ATENCION'];
                    $id_turno_medico=$row['HORARIO'];
                    $FEC_EMISION=$row['FEC_EMISION'];
                    $concepto=$row['CONCEPTO'];
                    $estado_pago=$row['COD_DOCUMENTO'];
                    $paciente=$row['APATERNO'].' '.$row['AMATERNO'].' '.$row['NOMBRE'];
                    $estado=$row['TIP_ESTADO'];
                    $cod_cobertura=$row['COD_COBERTURA'];

                   
                    $id_producto=$cod_atencion;
			        $codigo_producto=$cod_atencion;  
                    
                    ?> 
                  
                                    


                    <input type="hidden" value="<?php echo $cod_atencion;?>" id="cod_atencion<?php echo $cod_atencion;?>">
              
                    <tr>
                        
                        <td><?php echo utf8_encode($concepto)?></td>
                        <td><?php echo utf8_encode($paciente)?></td>
                        <td><div class="progress-bar bg-success" style="width: 75%; height:15px;" role="progressbar">20%</div></td>
                        <td> 
                           <a href="consulta.php?cod_atencion=<?php echo $cod_atencion;?>"><button type="button"   class="btn waves-effect waves-light btn-danger  mb-3"><i class="fas fa-check"></i> ATENDER</button></a>
                        </td>


                    </tr><?php
				}?>
                                                                  
                </tbody>
            </table>
            </div><?php

    }?>


<script src="assets/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
<script>
        $(function () {
            $('#myTable').DataTable({
                "scrollX": true
            });

            var table = $('#example').DataTable({
                
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function (settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function (group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function () {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
            // responsive table
            $('#config-table').DataTable({
                responsive: true
            });
            $('#example23').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
        });

</script>