<?php $__env->startSection('content'); ?>
    <div class="page-heading">
        <h1>Agenda de Consultas</h1>
        <p>Visualize os horários de atendimento de cada funcionário e seus clientes.</p>
        <a href="<?php echo e(route('agenda.create')); ?>" class="btn btn-primary">+ Novo Agendamento</a>
    </div>

    <div id="calendar" class="calendar-container"></div>

    <style>
        .page-heading {
            margin-bottom: 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .page-heading h1 {
            margin: 0;
        }

        #calendar {
            max-width: 100%;
            margin: 0 auto;
            background: #fff;
            padding: 1rem;
            border-radius: 1rem;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.08);
        }

        .fc .fc-col-header-cell-cushion {
            padding: 0.85rem 0.65rem;
        }

        .fc-event {
            position: relative;
            cursor: pointer;
        }

        .fc-event-delete {
            position: absolute;
            top: 4px;
            right: 4px;
            width: 20px;
            height: 20px;
            border: none;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.85);
            color: #c0392b;
            cursor: pointer;
            font-weight: bold;
            line-height: 18px;
            padding: 0;
        }

        .fc-event-delete:hover {
            background: rgba(255, 255, 255, 1);
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.20/index.global.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.20/index.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.20/locales/pt-br.global.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const calendarEl = document.getElementById('calendar');
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',

                headerToolbar: {
                    left: 'prev,next,today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridDay,listMonth'
                },
                locale: 'pt-br',
                navLinks: true,
                nowIndicator: true,
                weekNumbers: false,
                editable: false,
                eventSources: [
                    {
                        url: "<?php echo e(route('agenda.events')); ?>",
                        method: 'GET',
                        failure: function () {
                            alert('Não foi possível carregar os agendamentos.');
                        }
                    }
                ],
                eventDidMount: function (info) {
                    info.el.title = info.event.title + '\n' + (info.event.extendedProps.descricao || '');

                    info.el.addEventListener('dblclick', function () {
                        window.location.href = "<?php echo e(url('/agenda')); ?>/" + info.event.id + "/edit";
                    });
                }
            });  calendar.render();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\2026\Fatec\DesenvolvimentoWeb\PacoteVitalicio\RaiosVitaisCinco\RaiosVitaisLaravel\resources\views/agenda.blade.php ENDPATH**/ ?>