<?php
require_once('helpers/clsConexion.php');
class Admin_M
{
	public function ModelgetBetterEmployed()
	{
		try {

			$result = RunQuery("SELECT p.nombre, p.primer_apellido, p.segundo_apellido, p.curp, p.rfc, p.image_name, SUM(d.cantidad) AS cantidad_ventas, SUM(d.subtotal) AS total_ventas
			FROM es_ventas v
			JOIN es_detalle_ventas d ON  v.id_venta = d.fk_id_ventas
			JOIN es_empleados e ON v.fk_id_empleado = e.id_empleado
			JOIN es_personas p ON e.fk_id_persona = p.id_persona
			WHERE v.fecha >= DATE_SUB(CURRENT_DATE(), INTERVAL 30 DAY)
			GROUP BY e.id_empleado
			ORDER BY total_ventas DESC
			LIMIT 5;
			");
			return (empty($result) ? false : $result->fetchAll(PDO::FETCH_ASSOC));
		} catch (Exception $e) {
			print_r('error' . $e);
		}
	}

	
	public function ModelgetCountProspectos()
	{
		try {

			$result = RunQuery("SELECT COUNT(*) AS total FROM es_prospectos;");
			return (empty($result) ? false : $result->fetchAll(PDO::FETCH_ASSOC));
		} catch (Exception $e) {
			print_r('error' . $e);
		}
	}
	public function ModelgetCountProspectosMonth()
	{
		try {

			$result = RunQuery("SELECT COUNT(*) AS total
			FROM es_personas
			INNER JOIN es_prospectos ON es_personas.id_persona = es_prospectos.fk_id_persona
			WHERE es_personas.fecha_alta >= CURDATE() - INTERVAL 30 DAY
			;");
			return (empty($result) ? false : $result->fetchAll(PDO::FETCH_ASSOC));
		} catch (Exception $e) {
			print_r('error' . $e);
		}
	}


	public function ModelgetCountClientes()
	{
		try {

			$result = RunQuery("SELECT COUNT(*) AS total FROM es_clientes;");
			return (empty($result) ? false : $result->fetchAll(PDO::FETCH_ASSOC));
		} catch (Exception $e) {
			print_r('error' . $e);
		}
	}
	public function ModelgetCountClientesMonth()
	{
		try {

			$result = RunQuery("SELECT COUNT(*) AS total
			FROM es_personas
			INNER JOIN es_clientes ON es_personas.id_persona = es_clientes.fk_id_persona
			WHERE es_personas.fecha_alta >= CURDATE() - INTERVAL 30 DAY
			;");
			return (empty($result) ? false : $result->fetchAll(PDO::FETCH_ASSOC));
		} catch (Exception $e) {
			print_r('error' . $e);
		}
	}

	public function ModelgetCountProductos()
	{
		try {

			$result = RunQuery("SELECT COUNT(*) AS total FROM es_productos;");
			return (empty($result) ? false : $result->fetchAll(PDO::FETCH_ASSOC));
		} catch (Exception $e) {
			print_r('error' . $e);
		}
	}
	public function ModelgetCountProductosMonth()
	{
		try {

			$result = RunQuery("SELECT COUNT(*) AS total
			FROM es_productos
			WHERE es_productos.fecha_alta >= CURDATE() - INTERVAL 30 DAY
			;");
			return (empty($result) ? false : $result->fetchAll(PDO::FETCH_ASSOC));
		} catch (Exception $e) {
			print_r('error' . $e);
		}
	}

	public function ModelgetCountEmpleados()
	{
		try {

			$result = RunQuery("SELECT COUNT(*) AS total FROM es_empleados;");
			return (empty($result) ? false : $result->fetchAll(PDO::FETCH_ASSOC));
		} catch (Exception $e) {
			print_r('error' . $e);
		}
	}
	public function ModelgetCountEmpleadosMonth()
	{
		try {

			$result = RunQuery("SELECT COUNT(*) AS total
			FROM es_personas
			INNER JOIN es_empleados ON es_personas.id_persona = es_empleados.fk_id_persona
			WHERE es_personas.fecha_alta >= CURDATE() - INTERVAL 30 DAY
			;");
			return (empty($result) ? false : $result->fetchAll(PDO::FETCH_ASSOC));
		} catch (Exception $e) {
			print_r('error' . $e);
		}
	}

	public function ModelgetCountProveedores()
	{
		try {

			$result = RunQuery("SELECT COUNT(*) AS total FROM es_proveedores;");
			return (empty($result) ? false : $result->fetchAll(PDO::FETCH_ASSOC));
		} catch (Exception $e) {
			print_r('error' . $e);
		}
	}
	public function ModelgetCountProveedoresMonth()
	{
		try {

			$result = RunQuery("SELECT COUNT(*) AS total
			FROM es_personas
			INNER JOIN es_proveedores ON es_personas.id_persona = es_proveedores.fk_id_persona
			WHERE es_personas.fecha_alta >= CURDATE() - INTERVAL 30 DAY
			;");
			return (empty($result) ? false : $result->fetchAll(PDO::FETCH_ASSOC));
		} catch (Exception $e) {
			print_r('error' . $e);
		}
	}

	public function ModelgetCountVentas()
	{
		try {

			$result = RunQuery("SELECT COUNT(*) AS total FROM es_ventas;");
			return (empty($result) ? false : $result->fetchAll(PDO::FETCH_ASSOC));
		} catch (Exception $e) {
			print_r('error' . $e);
		}
	}
	public function ModelgetCountVentasMonth()
	{
		try {

			$result = RunQuery("SELECT COUNT(*) AS total
			FROM es_ventas
			WHERE es_ventas.fecha >= CURDATE() - INTERVAL 30 DAY
			;");
			return (empty($result) ? false : $result->fetchAll(PDO::FETCH_ASSOC));
		} catch (Exception $e) {
			print_r('error' . $e);
		}
	}
	public function ModelgetVentas()
	{
		try {

			$result = RunQuery("SELECT SUM(dv.cantidad) AS cantidad_vendida, SUM(dv.subtotal) AS total_neto_vendido, tp.descripcion_tipo_pro
			FROM es_ventas v
			JOIN es_detalle_ventas dv ON v.id_venta = dv.fk_id_ventas
			JOIN es_productos p ON dv.fk_id_producto = p.id_producto
			JOIN es_tipoproductos tp ON p.fk_id_tipo_producto = tp.id_tipo_producto
			WHERE v.fecha >= CURDATE() - INTERVAL 30 DAY
			GROUP BY tp.descripcion_tipo_pro
			ORDER BY tp.descripcion_tipo_pro DESC;
			");
			return (empty($result) ? false : $result->fetchAll(PDO::FETCH_ASSOC));
		} catch (Exception $e) {
			print_r('error' . $e);
		}
	}

	public function ModelgetCountVentasPedido()
	{
		try {

			$result = RunQuery("SELECT SUM(es_detalle_ventas.cantidad) AS total FROM es_detalle_ventas");
			return (empty($result) ? false : $result->fetchAll(PDO::FETCH_ASSOC));
		} catch (Exception $e) {
			print_r('error' . $e);
		}
	}
	public function ModelgetMercado()
	{
		try {

			$result = RunQuery("SELECT gm.id_giro_mercado, gm.nombre_giro, m.nombre_mercado, COUNT(DISTINCT ec.id_cliente) AS suma FROM es_mercados m JOIN es_giro_mercados gm ON m.id_mercado = gm.fk_id_mercado JOIN es_clientes ec ON gm.id_giro_mercado = ec.fk_id_giro_mercado GROUP BY gm.id_giro_mercado, gm.nombre_giro, m.id_mercado LIMIT 5;");
			return (empty($result) ? false : $result->fetchAll(PDO::FETCH_ASSOC));
		} catch (Exception $e) {
			print_r('error' . $e);
		}
	}
	public function ModelgetMercadoP()
	{
		try {

			$result = RunQuery("SELECT gm.id_giro_mercado, gm.nombre_giro, m.nombre_mercado, COUNT(DISTINCT ec.id_prospecto) AS suma FROM es_mercados m JOIN es_giro_mercados gm ON m.id_mercado = gm.fk_id_mercado JOIN es_prospectos ec ON gm.id_giro_mercado = ec.fk_id_giro_mercado GROUP BY gm.id_giro_mercado, gm.nombre_giro, m.id_mercado LIMIT 5;");
			return (empty($result) ? false : $result->fetchAll(PDO::FETCH_ASSOC));
		} catch (Exception $e) {
			print_r('error' . $e);
		}
	}
	public function ModelgetTotal()
	{
		try {

			$result = RunQuery("SELECT SUM(dv.total) as total FROM es_detalle_ventas dv
			JOIN es_ventas v ON dv.fk_id_ventas = v.id_venta
			WHERE v.fecha >= CURDATE() - INTERVAL 30 DAY;");
			return (empty($result) ? false : $result->fetchAll(PDO::FETCH_ASSOC));
		} catch (Exception $e) {
			print_r('error' . $e);
		}
	}
	
}

?>