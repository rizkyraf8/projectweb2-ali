// --default--
var ref = $('#tableList').DataTable({
	"processing": true,
	"autoWidth": false,
	"ajax": {
		"dataType": 'json',
		"contentType": "application/json; charset=utf-8",
		"type": "GET",
		"url": getUrl()
	},
	// sesuai tampilan table
	"columns": [
		{
			"data": 'tanggal',
			"className": "text-center"
		},
		{
			"data": 'nik',
			"className": "text-center"
		},
		{
			"data": 'nama',
			"className": "text-center"
		},
		{
			"data": '', //jam masuk
			render: function (data, type, row, meta) {
				return "08:00:00";
			},
			"className": "text-center"
		},
		{
			"data": 'jam_login',
			"className": "text-center"
		},
		{
			"data": 'nama', //jam pulang
			render: function (data, type, row, meta) {
				return "17:00:00";
			},
			"className": "text-center"
		},
		{
			"data": 'jam_logout',
			"className": "text-center"
		}
	]
});

$( "#start_date" ).change(function() {
    reloadTable();
});

$( "#end_date" ).change(function() {
    reloadTable();
});

function reloadTable() {
	ref.ajax.url(getUrl()).load();
}

function getUrl(){
    var startDate = $("#start_date").val();
    var endDate = $("#end_date").val();
    if(startDate != ""){
        startDate= "start_date="+ startDate;
    }
    if(endDate != ""){
        endDate= "&end_date="+ endDate;
	}
	// mengambil URL 
    return base_url + 'presensi/json?' + startDate+ endDate;
}