<?php
// /var/www/cursos/php/index.php
declare(strict_types=1);

$courses = [
  [
    'id' => 1,
    'title' => 'PHP Básico',
    'level' => 'Principiante',
    'duration' => '3 horas',
    'description' => 'Introducción a sintaxis, variables, operadores y estructuras de control.',
    'link' => '#'
  ],
  [
    'id' => 2,
    'title' => 'PHP y MySQL',
    'level' => 'Intermedio',
    'duration' => '5 horas',
    'description' => 'Conexión a bases de datos, consultas seguras y uso de PDO.',
    'link' => '#'
  ],
  [
    'id' => 3,
    'title' => 'POO en PHP',
    'level' => 'Intermedio',
    'duration' => '4 horas',
    'description' => 'Clases, objetos, herencia, interfaces y patrones básicos.',
    'link' => '#'
  ],
  [
    'id' => 4,
    'title' => 'Frameworks PHP (Laravel)',
    'level' => 'Avanzado',
    'duration' => '8 horas',
    'description' => 'Conceptos de MVC, rutas, controladores y Eloquent.',
    'link' => '#'
  ],
  [
    'id' => 5,
    'title' => 'Buenas prácticas y pruebas',
    'level' => 'Avanzado',
    'duration' => '4 horas',
    'description' => 'PSR, pruebas unitarias con PHPUnit y depuración.',
    'link' => '#'
  ],
];

// Filtros simples: búsqueda por texto y filtro por nivel
$q = trim((string)($_GET['q'] ?? ''));
$level = trim((string)($_GET['level'] ?? ''));

$filtered = array_filter($courses, function($c) use ($q, $level) {
  if ($level !== '' && mb_strtolower($c['level']) !== mb_strtolower($level)) {
    return false;
  }
  if ($q === '') return true;
  $haystack = mb_strtolower($c['title'] . ' ' . $c['description']);
  return mb_stripos($haystack, mb_strtolower($q)) !== false;
});

// Helper para escapar salida
function e(string $s): string {
  return htmlspecialchars($s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

$levels = array_values(array_unique(array_map(fn($c)=>$c['level'], $courses)));
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Cursos de PHP</title>
<style>
  body { font-family: Arial, sans-serif; margin: 20px; background:#f7f7f7; color:#222; }
  .container { max-width: 900px; margin: 0 auto; }
  header { margin-bottom: 20px; }
  .search { display:flex; gap:8px; margin-bottom:16px; }
  input[type="text"], select { padding:8px; font-size:14px; }
  button { padding:8px 12px; }
  .grid { display:grid; grid-template-columns: repeat(auto-fit,minmax(260px,1fr)); gap:12px; }
  .card { background:#fff; padding:12px; border-radius:6px; box-shadow:0 1px 3px rgba(0,0,0,0.08); }
  .meta { font-size:13px; color:#666; margin-bottom:8px; }
  .empty { color:#666; padding:20px; text-align:center; }
  a.btn { display:inline-block; margin-top:8px; padding:6px 10px; background:#007bff; color:#fff; text-decoration:none; border-radius:4px; }
</style>
</head>
<body>
<div class="container">
  <header>
    <h1>Cursos de PHP</h1>
    <p>Listado genérico de cursos. Usa la búsqueda o filtra por nivel.</p>
  </header>

  <form method="get" class="search" role="search" aria-label="Buscar cursos">
    <input type="text" name="q" placeholder="Buscar título o descripción" value="<?php echo e($q); ?>">
    <select name="level">
      <option value="">Todos los niveles</option>
      <?php foreach ($levels as $lv): ?>
        <option value="<?php echo e($lv); ?>" <?php if (mb_strtolower($lv) === mb_strtolower($level)) echo 'selected'; ?>><?php echo e($lv); ?></option>
      <?php endforeach; ?>
    </select>
    <button type="submit">Filtrar</button>
  </form>

  <main>
    <?php if (count($filtered) === 0): ?>
      <div class="empty">No hay cursos que coincidan.</div>
    <?php else: ?>
      <div class="grid" role="list">
        <?php foreach ($filtered as $c): ?>
          <article class="card" role="listitem" aria-labelledby="curso-<?php echo e((string)$c['id']); ?>">
            <h2 id="curso-<?php echo e((string)$c['id']); ?>"><?php echo e($c['title']); ?></h2>
            <div class="meta"><?php echo e($c['level']); ?> • <?php echo e($c['duration']); ?></div>
            <p><?php echo e($c['description']); ?></p>
            <a class="btn" href="<?php echo e($c['link']); ?>">Ver curso</a>
          </article>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </main>

  <footer style="margin-top:20px; font-size:13px; color:#666;">
    <p>&copy; <?php echo date('Y'); ?> Cursos de PHP</p>
  </footer>
</div>
</body>
</html>