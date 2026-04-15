<x-layout title="Simulado">
    <div>
        <form>
            <ul class="space-y-6">
                @foreach ($questoes as $questao)
                    <li class="p-4 border rounded-xl bg-white shadow-sm">
                        <p class="font-semibold mb-3">{{ $questao->enunciado }}</p>
                        <ul style="list-style-type: none;" class="mb-3 space-y-1 list-disc pl-5 text-sm text-gray-700">
                            <li>A) {{ $questao->opcao_a }}</li>
                            <li>B) {{ $questao->opcao_b }}</li>
                            <li>C) {{ $questao->opcao_c }}</li>
                            <li>D) {{ $questao->opcao_d }}</li>
                            <li>E) {{ $questao->opcao_e }}</li>
                        </ul>
                        <div class="flex flex-wrap gap-3 text-sm">
                            <label class="inline-flex items-center gap-2">
                                <input type="radio" name="resposta_{{ $questao->id }}" value="A" class="form-radio">
                                A
                            </label>
                            <label class="inline-flex items-center gap-2">
                                <input type="radio" name="resposta_{{ $questao->id }}" value="B" class="form-radio">
                                B
                            </label>
                            <label class="inline-flex items-center gap-2">
                                <input type="radio" name="resposta_{{ $questao->id }}" value="C" class="form-radio">
                                C
                            </label>
                            <label class="inline-flex items-center gap-2">
                                <input type="radio" name="resposta_{{ $questao->id }}" value="D" class="form-radio">
                                D
                            </label>
                            <label class="inline-flex items-center gap-2">
                                <input type="radio" name="resposta_{{ $questao->id }}" value="E" class="form-radio">
                                E
                            </label>
                        </div>
                    </li>
                @endforeach
            </ul>
            <button type="submit" class="mt-6 px-4 py-2 bg-blue-600 text-white rounded">Enviar Respostas</button>
        </form>
    </div>
</x-layout>