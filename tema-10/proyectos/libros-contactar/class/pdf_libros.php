<?php
class Pdf_libros extends FPDF
{
    public function Header()
    {   
        // Establecer fuente para el encabezado
        $this->SetFont('Arial', 'B', 12);
        
        // Logo
        $this->Image('images/logo_libro.png', 10, 5, 15);
        
        // Título centrado con línea inferior elegante
        $this->Cell(0, 10, iconv('UTF-8', 'ISO-8859-1', 'Lista de Libros - 2DAW - Curso 24/25'), 0, 1, 'C');
        $this->Ln(2);
        $this->SetDrawColor(100, 100, 100); // Gris sutil para la línea
        $this->Line(10, 22, 200, 22); // Línea inferior del título
    }

    public function Footer()
    {
        // Posicionar a 1,5 cm del final
        $this->SetY(-15);
        $this->SetFont('Arial', '', 9);
        $this->SetTextColor(120, 120, 120); // Gris suave
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

    public function titulo()
    {
        // Fuente y color para el título de la página
        $this->SetFont('Arial', 'B', 14);
        $this->SetTextColor(33, 37, 41); // Gris oscuro
        $this->Cell(0, 10, iconv('UTF-8', 'ISO-8859-1', 'Lista de libros'), 0, 1, 'C');
        $this->Ln(5);
        
        // Imagen de decoración (se ajusta para ocupar el ancho de la página)
        $this->Image('images/libros.png', 10, 35, 190);
        $this->Ln(65);
    }

    public function cabecera()
    {
        // Configuración de la fuente y colores para la cabecera del listado
        $this->SetFont('Arial', 'B', 10);
        $this->SetTextColor(50, 50, 50); // Texto en gris oscuro
        
        // Color de fondo sutil para destacar la cabecera 
        $this->SetFillColor(245, 222, 179); 

        
        // Nombres de las columnas sin bordes, utilizando relleno para resaltar
        $this->Cell(10, 8, 'ID', 0, 0, 'C', true);
        $this->Cell(57, 8, 'Titulo', 0, 0, 'L', true);
        $this->Cell(45, 8, 'Autor', 0, 0, 'L', true);
        $this->Cell(52, 8, 'Editorial', 0, 0, 'L', true);
        $this->Cell(12, 8, 'Stock', 0, 0, 'C', true);
        $this->Cell(14, 8, 'Precio', 0, 1, 'R', true);
        
        // Línea sutil para separar la cabecera del contenido
        $this->SetDrawColor(200, 200, 200);
        $this->Line(10, $this->GetY(), 200, $this->GetY());
        $this->Ln(4);
    }
}
?>
