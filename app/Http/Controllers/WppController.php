<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WppController extends Controller
{
    public function send(){
        $apiUrl = env('WHATSAPP_API_URL');
        $apiToken = env('WHATSAPP_API_TOKEN');

        // Construimos el payload de la solicitud a la API
        $payload = [
            'messaging_product' => 'whatsapp',// Producto de mensajería requerido
            'to' => '542984860419', // Número de teléfono del destinatario
            'type' => 'template',
            'template' => [
                'name' => 'nutelio_greeting', // Nombre del modelo de plantilla
                'language' => [
                    'code' => 'es_AR', // Código de idioma del modelo de plantilla
                ]
            ],
        ];

        try {
            // Hacemos la solicitud POST a la API de WhatsApp usando HTTP Client de Laravel
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $apiToken, // Autenticación de la API
                'Content-Type' => 'application/json',
            ])->withoutVerifying()->post($apiUrl, $payload);

            // Verificamos si la solicitud fue exitosa
            if ($response->successful()) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Mensaje enviado correctamente',
                    'data' => $response->json(),
                ], 200);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Error al enviar el mensaje',
                    'error' => $response->body(),
                ], $response->status());
            }

        } catch (\Exception $e) {
            // En caso de que ocurra un error, capturamos la excepción
            return response()->json([
                'status' => 'error',
                'message' => 'Excepción capturada: ' . $e->getMessage(),
            ], 500);
        }
    }
}
